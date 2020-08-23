<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Yearpoint extends Model
{
    protected $table = 'year_point';
    protected $guarded = [];

    public function User()
    {
    	return $this->belongsTo('App\User','user_id','id');
    }
    public function Subject()
    {
    	return $this->belongsTo('App\Subject','subject_id','id');
    }
}
