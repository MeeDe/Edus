<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'group_id', 'personal_number',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function groups()
    {
        return $this->hasMany('App\Models\Groups', 'id', 'group_id');
    }

    public function privileges_collection()
    {
        $group_roles = [];
        $privs_collection = new Collection();

        foreach($this->groups as $k => $group) {
            array_push($group_roles, $group->roles()->get());
        }

        foreach($group_roles as $roles) {
            foreach ($roles as $role) {     // can be x-th group n-th role. Roles can cover
                $privs_collection->add($role->privleges()->get());
            }
        }

        $privs_collection = $privs_collection->flatten();
        $privs = [];
        foreach($privs_collection as $priv) {
            array_push($privs, ['route' => $priv['route'], 'privilege' => $priv['operations']]);
        }

        return new Collection($privs);
    }

    private function getRoutePrivs($route)
    {
        $account_groups = $this->groups()->get();

        $account_group_roles = new Collection();
        $account_roles = new Collection();
        foreach($account_groups as $account_group) {
            $account_group_roles->add($account_group->roles()->get());
        }

        // nesting is strong with laravel's collections...
        foreach ($account_group_roles as $group_roles) {
            foreach($group_roles as $group_role) {
                $account_roles->add($group_role);
            }
        }

        $account_roles_privileges = new Collection();
        foreach ($account_roles as $account_role) {
            $account_roles_privileges->add($account_role->privileges()->get()->flatten()->all());
        }
        $account_roles_privileges = new Collection($account_roles_privileges->flatten()->all());
        return $account_roles_privileges->where('route', $route);
    }

    // administrator/groups/4/show      => pokaż grupe nr 4
    // administrator.groups.{id}.show
    
    public function checkOperation($route, $operation='R')
    {
        return true;
        $route_privs = $this->getRoutePrivs($route);
        if($route_privs->count()>0) {
            $route_privs->pluck('operations');
            foreach($route_privs as $priv) {
                if(strpos($priv['operations'], $operation) !== false) {
                    return true;
                }
            }
        }
        return false;
    }

    public function privileges()
    {
        return $this->groups();
    }

    public function haveRouteAccess($route, $access) {
        return $this->routes();
    }
}
