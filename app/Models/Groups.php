<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\AuditingTrait;

class Groups extends Model
{
    use AuditingTrait;

    protected $table		= 'groups';
    protected $primaryKey	= 'id';
    public $timestamps		= false;

    protected $fillable = [
        'name', 'descr',
    ];

    // Disables the log record in this model.
    protected $auditEnabled  = true;
    // Disables the log record after 500 records.
    protected $historyLimit = 500;
    // Fields you do NOT want to register.
    protected $dontKeepLogOf = ['created_at', 'updated_at'];
    // Tell what actions you want to audit.
    protected $auditableTypes = ['created', 'saved', 'deleted'];

    public function roles()
    {
        return $this->HasManyThrough('App\Models\Roles', 'App\Models\Groups_int_Roles', 'group_id', 'id');
    }

    public function accounts()
    {
        return $this->hasMany('App\User', 'group_id');
    }
}
