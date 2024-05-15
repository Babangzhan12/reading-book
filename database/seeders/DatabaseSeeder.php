<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Fauzan Ahmad',
        //     'email' => 'fauzanahmad@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Doddy Ferdiansyah',
        //     'email' => 'doddy@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        \App\Models\User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus aut exercitationem pariatur cumque odit repudiandae at quae expedita mollitia debitis vel voluptatem temporibus,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus aut exercitationem pariatur cumque odit repudiandae at quae expedita mollitia debitis vel voluptatem temporibus, aspernatur necessitatibus rem beatae assumenda delectus! Atque quam quaerat dolore explicabo iusto dolores, vitae placeat ullam vero dolor molestiae quisquam nostrum delectus? Veniam saepe architecto ipsam possimus minima nisi enim, nemo in natus sequi nostrum corporis sunt vero, voluptate facilis iusto. Ratione tempore, amet commodi recusandae reprehenderit iste eius porro impedit quasi sunt repellat, placeat dolorum quas quisquam vero beatae itaque soluta temporibus magnam corrupti. Ducimus quam vel officiis hic facilis amet molestiae temporibus quae. Iure, nostrum!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus aut exercitationem pariatur cumque odit repudiandae at quae expedita mollitia debitis vel voluptatem temporibus,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus aut exercitationem pariatur cumque odit repudiandae at quae expedita mollitia debitis vel voluptatem temporibus, aspernatur necessitatibus rem beatae assumenda delectus! Atque quam quaerat dolore explicabo iusto dolores, vitae placeat ullam vero dolor molestiae quisquam nostrum delectus? Veniam saepe architecto ipsam possimus minima nisi enim, nemo in natus sequi nostrum corporis sunt vero, voluptate facilis iusto. Ratione tempore, amet commodi recusandae reprehenderit iste eius porro impedit quasi sunt repellat, placeat dolorum quas quisquam vero beatae itaque soluta temporibus magnam corrupti. Ducimus quam vel officiis hic facilis amet molestiae temporibus quae. Iure, nostrum!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus aut exercitationem pariatur cumque odit repudiandae at quae expedita mollitia debitis vel voluptatem temporibus,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus aut exercitationem pariatur cumque odit repudiandae at quae expedita mollitia debitis vel voluptatem temporibus, aspernatur necessitatibus rem beatae assumenda delectus! Atque quam quaerat dolore explicabo iusto dolores, vitae placeat ullam vero dolor molestiae quisquam nostrum delectus? Veniam saepe architecto ipsam possimus minima nisi enim, nemo in natus sequi nostrum corporis sunt vero, voluptate facilis iusto. Ratione tempore, amet commodi recusandae reprehenderit iste eius porro impedit quasi sunt repellat, placeat dolorum quas quisquam vero beatae itaque soluta temporibus magnam corrupti. Ducimus quam vel officiis hic facilis amet molestiae temporibus quae. Iure, nostrum!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus aut exercitationem pariatur cumque odit repudiandae at quae expedita mollitia debitis vel voluptatem temporibus,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus aut exercitationem pariatur cumque odit repudiandae at quae expedita mollitia debitis vel voluptatem temporibus, aspernatur necessitatibus rem beatae assumenda delectus! Atque quam quaerat dolore explicabo iusto dolores, vitae placeat ullam vero dolor molestiae quisquam nostrum delectus? Veniam saepe architecto ipsam possimus minima nisi enim, nemo in natus sequi nostrum corporis sunt vero, voluptate facilis iusto. Ratione tempore, amet commodi recusandae reprehenderit iste eius porro impedit quasi sunt repellat, placeat dolorum quas quisquam vero beatae itaque soluta temporibus magnam corrupti. Ducimus quam vel officiis hic facilis amet molestiae temporibus quae. Iure, nostrum!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}


