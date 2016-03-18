<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    protected $table		= 'groups';
    protected $primaryKey	= 'id';
    public $timestamps		= false;

    protected $fillable = [
        'name', 'desc',
    ];

    public function roles()
    {
        return $this->HasManyThrough('App\Models\Roles', 'App\Models\Groups_int_Roles', 'group_id', 'id');
    }

    public function accounts()
    {
        return $this->hasMany('App\User', 'group_id');
    }
}
