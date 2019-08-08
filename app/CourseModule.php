<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseModule extends Model
{

    protected $guarded = [];

    public function course()
    {

        return $this->belongsTo(Course::class);
    }

    // a course module hasMany lessons

    public function lessons()
    {

        return $this->hasMany(Lesson::class);
    }
}