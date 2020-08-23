<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'users';
    const table = 'users';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $guarded = [];

    public function Folk()
    {
    	return $this->belongsTo('App\Folk','folk_id','id');
    }
    public function Point()
    {
        return $this->hasMany('App\Point','user_id','id');
    }
    public function Classes()
    {
        return $this->belongsTo('App\Studentclass','class_id','id');
    }
}