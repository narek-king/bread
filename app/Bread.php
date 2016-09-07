<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bread extends Model
{
    //
    public function subjects()
    {
        return $this->belongsToMany('App\Subject');
    }
}
