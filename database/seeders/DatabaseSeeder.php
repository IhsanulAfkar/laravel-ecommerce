<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Flower;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Ihsanul Afkar',
        //     'email' => 'ihsanul2001@gmail.com',
        //     'password' => Hash::make('12345'),
        // ]);
        Flower::create([
            'name' => 'Snowfall',
            'price' => 20000,
            'image' => 'snowfall.png'
        ]);
        Flower::create([
            'name' => "Dawn's Delight",
            'price' => 25000,
            'image' => 'dawn delight.png'
        ]);
        Flower::create([
            'name' => 'Pink Elegance',
            'price' => 30000,
            'image' => 'pink elegance.png'
        ]);
        Flower::create([
            'name' => 'Rustic Charm',
            'price' => 37000,
            'image' => 'rustic charm.png'
        ]);
        Flower::create([
            'name' => 'Autumn Symphony',
            'price' => 43000,
            'image' => 'autumn symphony.png'
        ]);
        Flower::create([
            'name' => 'Rosy Delight',
            'price' => 47500,
            'image' => 'rosy delight.png'
        ]);
        Flower::create([
            'name' => 'Serenity',
            'price' => 50000,
            'image' => 'serenity.png'
        ]);
        Flower::create([
            'name' => 'Blue Harmony',
            'price' => 52000,
            'image' => 'blue harmony.png'
        ]);
        Flower::create([
            'name' => 'Mystical Majesty',
            'price' => 56000,
            'image' => 'mystical majesty.png'
        ]);
        Flower::create([
            'name' => 'Blazing Blossoms',
            'price' => 58000,
            'image' => 'blazing blossoms.png'
        ]);
    }
}
