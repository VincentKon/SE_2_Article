<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            "name" => "Vincent",
            "username" => "dongo",
            "email" => "vincent@gmail.com",
            "password" => bcrypt("12345"),
            "is_admin" => 1,
            "is_author" => 1,
        ]);


        User::factory(10)->create();
        Post::factory(20)->create();


        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::create([
        //     "name" => "Steph",
        //     "email" => "steph@gmail.com",
        //     "password" => bcrypt("67890")
        // ]);
        Category::create([
            "name" => "Programming",
            "slug" => "programming"
        ]);
        Category::create([
            "name" => "Business",
            "slug" => "business"
        ]);
        Category::create([
            "name" => "Web Design",
            "slug" => "web-design"
        ]);
        // Post::create([
        //     "title" => "Judul Pertama",
        //     "slug" => "judul-pertama",
        //     "excerpt" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil reiciendis perspiciatis vel minima. Distinctio, magnam.",
        //     "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus mollitia enim, dolorum voluptatem, nobis eum explicabo totam voluptates quod assumenda placeat quis esse quibusdam praesentium sequi. Nobis voluptatem tenetur eum? Odit aliquam, natus nulla nihil quisquam minus laudantium ad dolorum laboriosam deserunt veritatis itaque officiis vel, deleniti quidem saepe laborum!",
        //     "category_id" => 1,
        //     "user_id" => 1
        // ]);
        // Post::create([
        //     "title" => "Judul Kedua",
        //     "slug" => "judul-kedua",
        //     "excerpt" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil reiciendis perspiciatis vel minima. Distinctio, magnam.",
        //     "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus mollitia enim, dolorum voluptatem, nobis eum explicabo totam voluptates quod assumenda placeat quis esse quibusdam praesentium sequi. Nobis voluptatem tenetur eum? Odit aliquam, natus nulla nihil quisquam minus laudantium ad dolorum laboriosam deserunt veritatis itaque officiis vel, deleniti quidem saepe laborum!",
        //     "category_id" => 1,
        //     "user_id" => 1
        // ]);
        // Post::create([
        //     "title" => "Judul Ketiga",
        //     "slug" => "judul-ketiga",
        //     "excerpt" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nihil reiciendis perspiciatis vel minima. Distinctio, magnam.",
        //     "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusamus mollitia enim, dolorum voluptatem, nobis eum explicabo totam voluptates quod assumenda placeat quis esse quibusdam praesentium sequi. Nobis voluptatem tenetur eum? Odit aliquam, natus nulla nihil quisquam minus laudantium ad dolorum laboriosam deserunt veritatis itaque officiis vel, deleniti quidem saepe laborum!",
        //     "category_id" => 2,
        //     "user_id" => 2
        // ]);
    }
}
