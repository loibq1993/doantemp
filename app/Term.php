<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    protected $table = 'terms';
    const table = 'terms';
    protected $guarded = [];

    public function Course()
    {
        return $this->belongsTo('App\Course','academic_id','id');
    }
    public function Point()
    {
        return $this->hasMany('App\Point','term_id','id');
    }
}