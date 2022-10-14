<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comment;
use App\Models\MediaUser;
use App\Models\Person;
use App\Models\Post;
use App\Models\Title;
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

        $posts = Post::factory(10)->create();
        $posts->each(function ($u) {
            $u->title()->save(Title::factory()->make());

        });

        Comment::factory(20)->create();
        
        Person::factory(20)->create();
        foreach( Person::all() as $person) { 
            $post= Post::inRandomOrder()->take(rand(1, 3))->pluck('id');
            $person->post()->attach($post);
            
        }

        MediaUser::factory(20)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
