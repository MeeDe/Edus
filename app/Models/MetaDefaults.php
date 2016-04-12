<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetaDefaults extends Model
{
    protected $table		= 'meta_defaults';
    protected $primaryKey	= 'md_id';
    public $timestamps		= false;

    protected $fillable = [
        'tag_name', 'tag_value',
    ];
}
