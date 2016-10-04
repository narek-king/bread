<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bread extends Model
{
    //

    protected $dates = [ 'date' ];
    public function subjects()
    {
        return $this->belongsToMany('App\Subject');
    }

    /**
     * Scope a query to only include breads of specified day.
     *
     * @args Query
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeDay($query, $day)
    {
        return $query->where('date', '=', $day);
    }
}
