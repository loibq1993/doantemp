<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transform extends Model
{
    protected $table = 'transform_form';
    const table = 'transform_form';

     public function Student()
    {
    	return $this->belongsTo('App\Student','name_user','id');
    }
    public function Classes()
    {
    	return $this->belongsTo('App\Classes','class_id_old','id');
    }
}