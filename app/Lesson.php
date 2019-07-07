<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\course;

class Lesson extends Model {

    protected $guarded = [];

    public function course() {

        return $this->belongsTo(Course::class);

    }
}
