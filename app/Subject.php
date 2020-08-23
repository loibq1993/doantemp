<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';
    const table = 'subjects';
    protected $guarded = [];

    public function Classes()
    {
    	return $this->belongsTo('App\Classes','subject_id','id');
    }
    public function Specialize()
    {
    	return $this->belongsTo('App\Specialize','specialize_id','id');
    }
}