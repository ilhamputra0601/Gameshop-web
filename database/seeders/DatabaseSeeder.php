<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Product::factory(20)->create();

        User::factory()->create([
            'id' => 1,
            'level' => 1,
            'name' => 'ilham',
            'email' => 'ilhamputra0601@gmail.com',
            'password' => Hash::make('ilhamputra0601@gmail.com'),
        ]);

        Category::factory()->create([
                'id' => 1,
                'name' => 'Adventure',
            ]);
        Category::factory()->create([
                'id' => 2,
                'name' => 'STRATEGY',
            ]);
        Category::factory()->create([
                'id' => 3,
                'name' => 'RACING',
            ]);
    }

}
