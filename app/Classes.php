<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'classes';
    const table = 'classes';
    protected $guarded = [];

    public function Student()
    {
        return $this->hasMany('App\Studentclass','class_id','id');
    }
    public function Subject()
    {
    	return $this->hasMany('App\Subject','subject_id','id');
    }
    function Transform()
    {
    	return $this->hasMany('App\Transform','class_id_old','id');
    }
}