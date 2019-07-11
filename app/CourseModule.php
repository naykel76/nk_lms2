<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseModule extends Model {

    protected $guarded = [];

    public function course() {

        return $this->belongsTo(Course::class);

    }

}
