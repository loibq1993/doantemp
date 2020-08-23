<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $table = 'point';
    protected $guarded = [];

    public function User()
    {
    	return $this->belongsTo('App\User','user_id','id');
    }
    public function Subject()
    {
    	return $this->belongsTo('App\Subject','subject_id','id');
    }
    public function Term()
    {
        return $this->belongsTo('App\Term','term_id','id');
    }
   
}