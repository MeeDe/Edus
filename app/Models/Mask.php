<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mask extends Model
{
    protected $table		= 'mask';
    protected $primaryKey	= 'id';
    public $timestamps		= false;

    protected $fillable = [
        'route', 'operations', 'user_id',
    ];

    public function Account()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
