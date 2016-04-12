<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetaRoutes extends Model
{
    protected $table		= 'meta_routes';
    protected $primaryKey	= 'mr_id';
    public $timestamps		= false;

    protected $fillable = [
        'tag_name', 'tag_value', 'route_name'
    ];
}
