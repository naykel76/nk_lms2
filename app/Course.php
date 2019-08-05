<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\CourseModule;

class Course extends Model {

    protected $guarded = [];

    public function courseModules() {

        return $this->hasMany(CourseModule::class);

    }
}
