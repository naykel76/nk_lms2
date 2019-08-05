<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\CourseModule;

class Lesson extends Model {

    protected $guarded = [];

    public function courseModule() {

        return $this->belongsTo(CourseModule::class);

    }
}
