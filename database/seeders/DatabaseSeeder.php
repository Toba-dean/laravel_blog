<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;

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
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family',
        ]);

        Post::create([
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet sint architecto dignissimos iste, alias explicabo mollitia reiciendis tenetur nam a laborum autem amet dicta quod rerum consectetur veniam maiores accusantium et corporis ipsa corrupti in fuga porro. Sint illo delectus officiis voluptatum voluptatibus voluptatem placeat magni autem suscipit reiciendis neque ipsum aspernatur, earum totam incidunt quis voluptas quidem obcaecati distinctio nisi repellat. Dolor obcaecati alias facilis autem. Quae porro repellat repellendus corrupti eius, quo deserunt rerum nemo veniam obcaecati! Facere sit, ab odio temporibus, laudantium quidem placeat exercitationem iusto, obcaecati corrupti eius in suscipit modi a dignissimos sequi nihil voluptas?',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet sint architecto dignissimos iste, alias explicabo mollitia reiciendis tenetur nam a laborum autem amet dicta quod',
            'user_id' => $user->id,
            'category_id' => $personal->id
        ]);

        Post::create([
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet sint architecto dignissimos iste, alias explicabo mollitia reiciendis tenetur nam a laborum autem amet dicta quod rerum consectetur veniam maiores accusantium et corporis ipsa corrupti in fuga porro. Sint illo delectus officiis voluptatum voluptatibus voluptatem placeat magni autem suscipit reiciendis neque ipsum aspernatur, earum totam incidunt quis voluptas quidem obcaecati distinctio nisi repellat. Dolor obcaecati alias facilis autem. Quae porro repellat repellendus corrupti eius, quo deserunt rerum nemo veniam obcaecati! Facere sit, ab odio temporibus, laudantium quidem placeat exercitationem iusto, obcaecati corrupti eius in suscipit modi a dignissimos sequi nihil voluptas?',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet sint architecto dignissimos iste, alias explicabo mollitia reiciendis tenetur nam a laborum autem amet dicta quod',
            'user_id' => $user->id,
            'category_id' => $work->id
        ]);

        Post::create([
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet sint architecto dignissimos iste, alias explicabo mollitia reiciendis tenetur nam a laborum autem amet dicta quod rerum consectetur veniam maiores accusantium et corporis ipsa corrupti in fuga porro. Sint illo delectus officiis voluptatum voluptatibus voluptatem placeat magni autem suscipit reiciendis neque ipsum aspernatur, earum totam incidunt quis voluptas quidem obcaecati distinctio nisi repellat. Dolor obcaecati alias facilis autem. Quae porro repellat repellendus corrupti eius, quo deserunt rerum nemo veniam obcaecati! Facere sit, ab odio temporibus, laudantium quidem placeat exercitationem iusto, obcaecati corrupti eius in suscipit modi a dignissimos sequi nihil voluptas?',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet sint architecto dignissimos iste, alias explicabo mollitia reiciendis tenetur nam a laborum autem amet dicta quod',
            'user_id' => $user->id,
            'category_id' => $family->id
        ]);
    }
}
