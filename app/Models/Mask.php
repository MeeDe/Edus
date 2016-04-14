<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\AuditingTrait;

class Mask extends Model
{
    use AuditingTrait;

    protected $table		= 'mask';
    protected $primaryKey	= 'id';
    public $timestamps		= false;

    protected $fillable = [
        'route', 'operations', 'user_id',
    ];

    // Disables the log record in this model.
    protected $auditEnabled  = true;
    // Disables the log record after 500 records.
    protected $historyLimit = 500;
    // Fields you do NOT want to register.
    protected $dontKeepLogOf = ['created_at', 'updated_at'];
    // Tell what actions you want to audit.
    protected $auditableTypes = ['created', 'saved', 'deleted'];

    public function Account()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
