<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseModule extends Model {

    public function course() {

        return $this->belongsTo(Course::class);

    }

}
