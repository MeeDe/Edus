<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Groups_int_Roles extends Model
{
    protected $table		= 'group_roles';
    protected $primaryKey	= 'role_id';
    public $timestamps		= false;

    protected $fillable = [
        'role_id', 'group_id',
    ];
}
