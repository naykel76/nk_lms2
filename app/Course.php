<?php

namespace App;

use App\Module;
use Illuminate\Database\Eloquent\Model;

class Course extends Model {

	protected $guarded = [];

	public function modules() {

		return $this->hasMany(Module::class);

	}
}
