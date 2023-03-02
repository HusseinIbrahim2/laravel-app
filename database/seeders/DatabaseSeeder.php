<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
//        User::truncate();
//        Post::truncate();
//        Category::truncate();

        $user = User::factory()->create([
            'name' => 'John Doe'
        ]);

        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

//
//        $personal = Category::create([
//            'name' => 'Personal',
//            'slug' => 'personal'
//        ]);
//
//        $family = Category::create([
//            'name' => 'Family',
//            'slug' => 'family'
//        ]);
//
//        $work = Category::create([
//            'name' => 'Work',
//            'slug' => 'work'
//        ]);
//
//        Post::create([
//            'category_id' => $family->id,
//           'user_id' => $user->id,
//           'title' => 'My Family Post',
//           'excerpt' => 'Avada Kadavra',
//           'slug' => 'my-first-post',
//           'body' => '<p>Berrr shribibibdopp diopppd odp yess yess eysss</p>',
//       ]);
//
//        Post::create([
//            'category_id' => $work->id,
//           'user_id' => $user->id,
//           'title' => 'My Work Post',
//           'excerpt' => 'Avada Kadavra',
//           'slug' => 'my-second-post',
//           'body' => '<p>Berrr shribibibdopp diopppd odp yess yess eysss</p>',
//       ]);
//
//        Post::create([
//            'category_id' => $personal->id,
//           'user_id' => $user->id,
//           'title' => 'My Personal Post',
//           'excerpt' => 'Avada Kadavra',
//           'slug' => 'my-third-post',
//           'body' => '<p>Berrr shribibibdopp diopppd odp yess yess eysss</p>',
//       ]);
//
//
//        \App\Models\User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
    }
}
