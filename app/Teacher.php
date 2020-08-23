<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teacher';
    const table = 'teacher';
    protected $guarded = [];
    
    public function Specialize()
    {
    	return $this->belongsTo('App\Specialize','specialize_id','id')->withDefault();
    }
}
