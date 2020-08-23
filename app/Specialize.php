<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialize extends Model
{
    protected $table = 'specialize';
    const table = 'specialize';
    protected $guarded = [];

    public function Subject()
    {
    	return $this->hasMany('App\Subject','specialize_id','id');
    }
}
