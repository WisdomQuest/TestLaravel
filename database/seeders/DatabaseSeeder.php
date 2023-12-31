<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            CommentSeeder::class,
            AuthorSeeder::class,
            NewsSeeder::class,
            UsersSeeder::class,
            PostSeeder::class,
            AddressSeeder::class,
            ClientSeeder::class,
            OrderSeeder::class,
            NumberPhoneSeeder::class,
            ProductSeeder::class,
            OrderProductSeeder::class,
            SkillSeeder::class,
            AuthorSkillSeeder::class,
        ]);
    }
}
