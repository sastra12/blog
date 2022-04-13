<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        // User::create([
        //     'name' => 'Sastra Rianto',
        //     'email' => 'rsastra901@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Aisyah Dewi',
        //     'email' => 'aisyah901@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Education',
            'slug' => 'education',
        ]);

        Category::create([
            'name' => 'Sport',
            'slug' => 'sport',
        ]);

        Category::create([
            'name' => 'Government',
            'slug' => 'Government',
        ]);

        Post::factory(15)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        //     Sed pharetra justo eget mauris ullamcorper vulputate. Aenean venenatis vehicula dolor id blandit. 
        //     Nulla nunc enim, iaculis nec arcu at, bibendum bibendum massa. Nulla facilisi. Maecenas at elit urna',
        //     'body' => 'Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
        //     Sed pharetra justo eget mauris ullamcorper vulputate. Aenean venenatis vehicula dolor id blandit. 
        //     Nulla nunc enim, iaculis nec arcu at, bibendum bibendum massa. Nulla facilisi. Maecenas at elit urna. 
        //     Duis finibus ultrices semper. Aenean id velit libero. Aliquam congue sem a vulputate aliquam. 
        //     Nulla blandit faucibus velit vitae finibus. Ut urna enim, auctor quis sollicitudin tincidunt, lacinia et tortor. 
        //     Maecenas sollicitudin purus quis sollicitudin placerat. Morbi pretium arcu massa, fermentum tincidunt enim pellentesque quis. 
        //     Sed semper tortor mauris, eget sagittis ex semper ac. Mauris id lectus sagittis mauris lobortis ultrices. 
        //     Donec vehicula commodo lacinia. Praesent vehicula pulvinar risus vel convallis. 
        //     Vivamus semper, lectus a congue aliquam, ipsum nunc dignissim tellus, nec eleifend neque dui eget elit. 
        //     Fusce vel sollicitudin quam, hendrerit pretium velit. Morbi quis mi sit amet elit viverra fermentum sed ut leo. 
        //     Morbi vitae metus bibendum, interdum justo viverra, euismod dui'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        //     Sed pharetra justo eget mauris ullamcorper vulputate. Aenean venenatis vehicula dolor id blandit. 
        //     Nulla nunc enim, iaculis nec arcu at, bibendum bibendum massa. Nulla facilisi. Maecenas at elit urna',
        //     'body' => 'Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
        //     Sed pharetra justo eget mauris ullamcorper vulputate. Aenean venenatis vehicula dolor id blandit. 
        //     Nulla nunc enim, iaculis nec arcu at, bibendum bibendum massa. Nulla facilisi. Maecenas at elit urna. 
        //     Duis finibus ultrices semper. Aenean id velit libero. Aliquam congue sem a vulputate aliquam. 
        //     Nulla blandit faucibus velit vitae finibus. Ut urna enim, auctor quis sollicitudin tincidunt, lacinia et tortor. 
        //     Maecenas sollicitudin purus quis sollicitudin placerat. Morbi pretium arcu massa, fermentum tincidunt enim pellentesque quis. 
        //     Sed semper tortor mauris, eget sagittis ex semper ac. Mauris id lectus sagittis mauris lobortis ultrices. 
        //     Donec vehicula commodo lacinia. Praesent vehicula pulvinar risus vel convallis. 
        //     Vivamus semper, lectus a congue aliquam, ipsum nunc dignissim tellus, nec eleifend neque dui eget elit. 
        //     Fusce vel sollicitudin quam, hendrerit pretium velit. Morbi quis mi sit amet elit viverra fermentum sed ut leo. 
        //     Morbi vitae metus bibendum, interdum justo viverra, euismod dui'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'category_id' => 3,
        //     'user_id' => 2,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        //     Sed pharetra justo eget mauris ullamcorper vulputate. Aenean venenatis vehicula dolor id blandit. 
        //     Nulla nunc enim, iaculis nec arcu at, bibendum bibendum massa. Nulla facilisi. Maecenas at elit urna',
        //     'body' => 'Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. 
        //     Sed pharetra justo eget mauris ullamcorper vulputate. Aenean venenatis vehicula dolor id blandit. 
        //     Nulla nunc enim, iaculis nec arcu at, bibendum bibendum massa. Nulla facilisi. Maecenas at elit urna. 
        //     Duis finibus ultrices semper. Aenean id velit libero. Aliquam congue sem a vulputate aliquam. 
        //     Nulla blandit faucibus velit vitae finibus. Ut urna enim, auctor quis sollicitudin tincidunt, lacinia et tortor. 
        //     Maecenas sollicitudin purus quis sollicitudin placerat. Morbi pretium arcu massa, fermentum tincidunt enim pellentesque quis. 
        //     Sed semper tortor mauris, eget sagittis ex semper ac. Mauris id lectus sagittis mauris lobortis ultrices. 
        //     Donec vehicula commodo lacinia. Praesent vehicula pulvinar risus vel convallis. 
        //     Vivamus semper, lectus a congue aliquam, ipsum nunc dignissim tellus, nec eleifend neque dui eget elit. 
        //     Fusce vel sollicitudin quam, hendrerit pretium velit. Morbi quis mi sit amet elit viverra fermentum sed ut leo. 
        //     Morbi vitae metus bibendum, interdum justo viverra, euismod dui'
        // ]);
    }
}
