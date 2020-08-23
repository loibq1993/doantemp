<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'academic_years';
    const table = 'academic_years';
    protected $guarded = [];
    
    public function Term()
    {
        return $this->hasMany('App\Term','academic_id','id');
    }
}