<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

       

        User::factory(10)->create();
        Article::factory(10)->create();

        User::factory()->create([
             'name' => 'José Rodríguez',
             'email' => 'rodriguezjose519@gmail.com',
             'password' => Hash::make('123')]);
    }
}
