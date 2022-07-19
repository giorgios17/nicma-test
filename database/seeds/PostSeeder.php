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
        //richiamo i post per popolare la tabella "post" del db
        $posts = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/posts'));
        //ciclo i post e li inserisco nel db
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