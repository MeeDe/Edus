<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\AuditingTrait;

class Roles_int_Privileges extends Model
{
    use AuditingTrait;

    protected $table		= 'roles_privileges';
    protected $primaryKey	= 'priv_id';
    public $timestamps		= false;

    protected $fillable = [
        'role_id', 'priv_id',
    ];

    // Disables the log record in this model.
    protected $auditEnabled  = true;
    // Disables the log record after 500 records.
    protected $historyLimit = 500;
    // Fields you do NOT want to register.
    protected $dontKeepLogOf = ['created_at', 'updated_at'];
    // Tell what actions you want to audit.
    protected $auditableTypes = ['created', 'saved', 'deleted'];
}
