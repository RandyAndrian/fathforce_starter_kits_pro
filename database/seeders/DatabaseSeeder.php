<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
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
        \App\Models\User::factory(5)->create();
        \App\Models\Post::factory(10)->create();
        // User::create([
        //     'name' => 'Muhamad Randy Andrian ',
        //     'email' => 'randy@fathforce.com',
        //     'password' => bcrypt('123456'),
        // ]);

        // Post::create([
        //     'user_id' => 1,
        //     'title' => 'Posting Pertama',
        //     'slug' => 'posting-pertama',
        //     'excerpt' => 'Bagaimana bambank bisa menjadi tampan dan pemberani',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, consequatur neque quis unde dolorum vero, ducimus praesentium fugit, at quae aperiam. Mollitia fugiat quo voluptatem impedit reprehenderit, recusandae culpa! Accusamus.'
        // ]);

        // Post::create([
        //     'user_id' => 1,
        //     'title' => 'Posting Kedua',
        //     'slug' => 'posting-kedua',
        //     'excerpt' => 'Bagaimana bambank bisa menjadi tampan dan pemberani part 2',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, consequatur neque quis unde dolorum vero, ducimus praesentium fugit, at quae aperiam. Mollitia fugiat quo voluptatem impedit reprehenderit, recusandae culpa! Accusamus.'
        // ]);

        // Post::create([
        //     'user_id' => 1,
        //     'title' => 'Posting Ketiga',
        //     'slug' => 'posting-ketiga',
        //     'excerpt' => 'Bagaimana bambank bisa menjadi tampan dan pemberani part 3',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, consequatur neque quis unde dolorum vero, ducimus praesentium fugit, at quae aperiam. Mollitia fugiat quo voluptatem impedit reprehenderit, recusandae culpa! Accusamus.'
        // ]);

        // Post::create([
        //     'user_id' => 1,
        //     'title' => 'Posting Ke empat',
        //     'slug' => 'posting-keempat',
        //     'excerpt' => 'Bagaimana bambank bisa menjadi tampan dan pemberani part 4',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, consequatur neque quis unde dolorum vero, ducimus praesentium fugit, at quae aperiam. Mollitia fugiat quo voluptatem impedit reprehenderit, recusandae culpa! Accusamus.'
        // ]);

        // Post::create([
        //     'user_id' => 1,
        //     'title' => 'Posting Kelima',
        //     'slug' => 'posting-kelima',
        //     'excerpt' => 'Bagaimana bambank bisa menjadi tampan dan pemberani part 5',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, consequatur neque quis unde dolorum vero, ducimus praesentium fugit, at quae aperiam. Mollitia fugiat quo voluptatem impedit reprehenderit, recusandae culpa! Accusamus.'
        // ]);
    }
}
