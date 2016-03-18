<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles_int_Privileges extends Model
{
    protected $table		= 'roles_privileges';
    protected $primaryKey	= 'priv_id';
    public $timestamps		= false;

    protected $fillable = [
        'role_id', 'priv_id',
    ];
}
