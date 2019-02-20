<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
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
        for ($i = 0; $i < 10; $i++) {
            echo $i . PHP_EOL;
            $posts = factory(Post::class)
                ->create(['user_id' => User::inRandomOrder()->first()->id])
                ->each(function ($post) {
                    for ($j = 0; $j < 15; $j++) {
                        factory(Comment::class)->create([
                            'user_id' => User::inRandomOrder()->first()->id,
                            'post_id' => $post->id,
                        ]);
                    }
                });
        }
    }
}
