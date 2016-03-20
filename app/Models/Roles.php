<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\AuditingTrait;

use App\Models\Roles_int_Privileges as RIP;
use App\Models\Groups_int_Roles as GIR;

class Roles extends Model
{
    use AuditingTrait;

    protected $table		= 'roles';
    protected $primaryKey	= 'id';
    public $timestamps		= false;

    protected $fillable = [
        'name', 'desc',
    ];

    // Disables the log record in this model.
    protected $auditEnabled  = true;
    // Disables the log record after 500 records.
    protected $historyLimit = 500;
    // Fields you do NOT want to register.
    protected $dontKeepLogOf = ['created_at', 'updated_at'];
    // Tell what actions you want to audit.
    protected $auditableTypes = ['created', 'saved', 'deleted'];

    public function privileges()
    {
        return $this->HasManyThrough('App\Models\Privileges',
            'App\Models\Roles_int_Privileges',
            'role_id', 'id');
    }

    public function groups()
    {
        return $this->belongsToMany('App\Models\Groups', 'group_roles', 'role_id', 'group_id');
    }

    public function accounts()
    {
        $groups = $this->groups()->get();
        $accs = new Collection();
        foreach ($groups as $group) {
            $accs->add($group->accounts()->get()->flatten());

        }
        return $accs->flatten();
    }

    protected static function boot() {
        parent::boot();

        static::deleting(function($role) {
            RIP::where('role_id', $role->id)->delete();
            GIR::where('role_id', $role->id)->delete();
        });
    }
}
