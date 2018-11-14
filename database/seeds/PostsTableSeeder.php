<?php

use App\Models\Post;
use App\Models\User;
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
        for ($i = 0; $i < 100; $i++) {
            echo $i . PHP_EOL;
            $user = factory(User::class)->create();
            factory(Post::class, 10000)->create(['user_id' => $user->id]);
        }
    }
}
