<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Privileges extends Model
{
    protected $table		= 'privileges';
    protected $primaryKey	= 'id';
    public $timestamps		= false;

    protected $fillable = [
        'route', 'operations',
    ];
}
