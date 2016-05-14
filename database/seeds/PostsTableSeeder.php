<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Comentado truncate por conta das fk criadas
//        Post::truncate();
        factory('App\Post',15)->create();
    }
}
