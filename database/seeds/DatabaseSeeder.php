<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('courses')->insert([
            'title' => 'How to make things and do stuff: Go from zero to hero and impress your friends',
            'slug' => 'how-to-do-things-and-make-stuff-work',
            'image' => 'https://naykel.com.au/images/placeholder-4x3.svg',
            'headline' => 'Learn skills to become useful! Start from the basics and work towards becoming seasoned professional in things and stuff.',
            'body' => '<p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus tempore molestiae reiciendis nulla, eveniet cupiditate excepturi repudiandae impedit! Ad nam dignissimos, sit accusamus quibusdam error voluptatibus amet? Libero perspiciatis cupiditate aliquam inventore, quis ducimus sapiente!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora at atque veniam quasi placeat molestias consequatur mollitia. Necessitatibus, inventore. Itaque.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi vitae ipsa aliquid, suscipit modi rerum a voluptatem. Fugit, commodi quisquam dolores odit perferendis laboriosam illo eum magnam autem porro impedit, odio ut sunt voluptates ea. Rerum, aliquam laborum reiciendis perferendis provident est saepe veritatis. Autem consectetur aliquid placeat? Omnis, dolorum.</p>',
            'price' => 84.99
        ]);

        DB::table('courses')->insert([
            'title' => 'This is the main course title',
            'slug' => 'this-is-the-slug',
            'image' => 'https://naykel.com.au/images/placeholder-4x3.svg',
            'headline' => 'Optionally add a headline under the title to indicate the nature of the course!',
            'body' => '<p>Rutrum tellus pellentesque eu tincidunt tortor aliquam nulla. Elementum nisi quis eleifend quam adipiscing vitae proin sagittis nisl. Fermentum leo vel orci porta non pulvinar neque laoreet. Enim nunc faucibus a pellentesque sit amet. Eget est lorem ipsum dolor. Magna etiam tempor orci eu. Malesuada nunc vel risus commodo. Quisque non tellus orci ac auctor. Non curabitur gravida arcu ac tortor dignissim convallis aenean. Maecenas sed enim ut sem. Id venenatis a condimentum vitae sapien pellentesque habitant morbi. Aliquet nibh praesent tristique magna sit amet purus gravida.</p>

            <p>Proin nibh nisl condimentum id. Non nisi est sit amet facilisis. Dolor purus non enim praesent elementum facilisis leo vel fringilla. Vitae suscipit tellus mauris a diam maecenas sed enim ut. Diam maecenas ultricies mi eget mauris. Facilisi morbi tempus iaculis urna id. Vitae purus faucibus ornare suspendisse sed. Nullam eget felis eget nunc lobortis mattis aliquam faucibus purus. Elit scelerisque mauris pellentesque pulvinar. Cursus eget nunc scelerisque viverra. Metus dictum at tempor commodo. Porta non pulvinar neque laoreet suspendisse interdum. Felis bibendum ut tristique et. Tellus elementum sagittis vitae et leo. Neque gravida in fermentum et sollicitudin ac orci phasellus egestas. Cras pulvinar mattis nunc sed. In eu mi bibendum neque egestas congue quisque. Felis donec et odio pellentesque diam. Tellus cras adipiscing enim eu turpis egestas pretium.</p>

            <p>Sit amet nisl suscipit adipiscing bibendum est ultricies. Malesuada proin libero nunc consequat interdum varius sit amet mattis. Libero justo laoreet sit amet. Tortor condimentum lacinia quis vel. Felis imperdiet proin fermentum leo vel orci porta non pulvinar. Congue nisi vitae suscipit tellus mauris a diam maecenas sed. At auctor urna nunc id cursus metus. Et tortor consequat id porta. Ornare lectus sit amet est placerat in egestas erat imperdiet. Nunc vel risus commodo viverra maecenas. Natoque penatibus et magnis dis parturient. In vitae turpis massa sed. Maecenas volutpat blandit aliquam etiam. Ipsum a arcu cursus vitae congue. Posuere sollicitudin aliquam ultrices sagittis orci. Eu mi bibendum neque egestas congue. Justo laoreet sit amet cursus sit amet. Vulputate sapien nec sagittis aliquam malesuada bibendum arcu. Malesuada fames ac turpis egestas maecenas pharetra convallis. Quisque non tellus orci ac auctor.</p>',
            'price' => 84.99
        ]);

        DB::table('course_modules')->insert([
            'course_id' => '1',
            'title' => 'module One',
            'slug' => 'module-one',
            'order' => 1
        ]);

        DB::table('course_modules')->insert([
            'course_id' => '1',
            'title' => 'module Two',
            'slug' => 'module-two',
            'order' => 3
        ]);

        DB::table('course_modules')->insert([
            'course_id' => '1',
            'title' => 'module Three',
            'slug' => 'module-three',
            'order' => 2
        ]);

        DB::table('lessons')->insert([
            'course_module_id' => '1',
            'title' => 'Lesson One',
            'slug' => 'lesson-one',
            'image' => '',
            'body' => ''
        ]);

        DB::table('lessons')->insert([
            'course_module_id' => '1',
            'title' => 'Lesson Two',
            'slug' => 'lesson-two',
            'image' => '',
            'body' => ''
        ]);

        DB::table('lessons')->insert([
            'course_module_id' => '1',
            'title' => 'Lesson Three',
            'slug' => 'lesson-three',
            'image' => '',
            'body' => ''
        ]);
    }
}