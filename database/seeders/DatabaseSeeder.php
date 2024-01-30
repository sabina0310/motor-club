<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AboutUsModel;
use App\Models\ProductModel;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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

        $about_us = new AboutUsModel();
        $about_us->content = 'Motoran is a close-knit community of motorcycle enthusiasts united by their love for riding. This vibrant group cultivates camaraderie through group rides, events, and social gatherings, fostering a deep sense of belonging. Whether united by a specific brand, style, or the shared joy of motorcycling freedom, these communities are hubs for friendship and the collective celebration of thrilling two-wheel adventures.';
        $about_us->save();

        $product = new ProductModel();
        $product->name = 'Gloves';
        $product->price = 500000;
        $product->image = 'https://www.premierequine.co.uk/cdn/shop/files/Metaro-Riding-Gloves-Black-1_047169cb-a041-4925-bd1a-1a897cbc8afb.jpg?v=1687780430';
        $product->save();

        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@example.com';
        $user->role = 'admin';
        $user->password = Hash::make(123456);
        $user->save();

        $client = new User();
        $client->name = 'client';
        $client->email = 'client@example.com';
        $client->role = 'client';
        $client->password = Hash::make(123456);
        $client->save();
    }
}
