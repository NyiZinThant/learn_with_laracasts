<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
        $user = User::factory()->create([
            'name' => "John Doe",
            'username' => "JohnDoe",
        ]);
        Post::factory(15)->create([
            'user_id' => $user->id,
        ]);
    }
}
