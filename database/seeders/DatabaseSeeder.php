<?php

namespace Database\Seeders;

use App\Models\Category;
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
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $work = Category::create([
            "name" => "Work",
            "slug" => "work"
        ]);

        $personal = Category::create([
            "name" => "Personal",
            "slug" => "personal"
        ]);

        $family = Category::create([
            "name" => "Family",
            "slug" => "family"
        ]);

        Post::create([
            "category_id" => $work->id,
            "user_id" => $user->id,
            "title" => "My Work Post",
            "slug" => "my-work-post",
            "excerpt" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit.",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore dolores minima quis, aliquam veniam impedit iste cum dolore voluptas blanditiis repellat soluta incidunt minus odio deserunt quia ut modi perspiciatis!",
        ]);

        Post::create([
            "category_id" => $personal->id,
            "user_id" => $user->id,
            "title" => "My Personal Post",
            "slug" => "my-personal-post",
            "excerpt" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit.",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore dolores minima quis, aliquam veniam impedit iste cum dolore voluptas blanditiis repellat soluta incidunt minus odio deserunt quia ut modi perspiciatis!",
        ]);

        Post::create([
            "category_id" => $family->id,
            "user_id" => $user->id,
            "title" => "My Family Post",
            "slug" => "my-family-post",
            "excerpt" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit.",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore dolores minima quis, aliquam veniam impedit iste cum dolore voluptas blanditiis repellat soluta incidunt minus odio deserunt quia ut modi perspiciatis!",
        ]);
    }
}
