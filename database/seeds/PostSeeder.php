<?php

use Illuminate\Database\Seeder;
use App\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/posts'));
        foreach ($posts as $post) {
            Post::create([
                'userid' => $post->userId,
                'id' => $post->id,
                'title' => $post->title,
                'body' => $post->body,
            ]);
        }
    }
}