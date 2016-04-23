<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{

    protected $table		= 'logs';
    protected $primaryKey	= 'id';
    public $timestamps		= false;

    protected $fillable = [];

    public function account()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    /*
    public function object()
    {
        $model = $this->owner_type;             // it can be App\Models\SomeModel
        $model = new $model;                    // new App\Models\SomeModel;
        return $model->find($this->owner_id);   // return SomeModel::find(its_id)
    }
    */
}
