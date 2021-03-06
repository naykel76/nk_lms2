<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('lessons', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->unsignedInteger('module_id');
			$table->string('title', '255');
			$table->string('slug')->nullable()->unique();
			$table->text('image')->nullable();
			$table->text('body')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('lessons');
	}
}
