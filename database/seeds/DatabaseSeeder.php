<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // $this->call(UsersTableSeeder::class);
        DB::table('courses')->insert([
            'title' => 'How to make things and do stuff.',
            'slug' => 'how-to-do-things-and-make-stuff-work',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae excepturi pariatur non, neque ad, in rerum deserunt officiis possimus dolorem dignissimos, sed tenetur eveniet ducimus eum quis deleniti ratione nam nemo impedit alias aut natus. Nesciunt quo consequatur iusto ab, tempore asperiores provident aliquam facere ullam tenetur qui eaque. Sit.',
            'price' => 84.99
        ]);

        DB::table('courses')->insert([
            'title' => 'Why pigs don\'t fly.',
            'slug' => 'why-pigs-don\'t-fly',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae excepturi pariatur non, neque ad, in rerum deserunt officiis possimus dolorem dignissimos, sed tenetur eveniet ducimus eum quis deleniti ratione nam nemo impedit alias aut natus. Nesciunt quo consequatur iusto ab, tempore asperiores provident aliquam facere ullam tenetur qui eaque. Sit.',
            'price' => 24.99
        ]);
    }
}
