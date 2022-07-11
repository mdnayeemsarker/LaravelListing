<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(5)->create();
        $user = User::factory()->create([
            'name' => 'Nayeem Sarker',
            'email' => 'nayeem@gmail.com',
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        // Listing::create([
        //     'title' => 'Laravel Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'abmn',
        //     'location' => 'Rangpur, Bangladesh',
        //     'email' => 'nayeem@gmail.com',
        //     'website' => 'https://www.abmn.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla in aliquid non doloremque veritatis architecto, impedit quae, consectetur eos quis recusandae et, eligendi cupiditate rem! Facere cumque impedit enim architecto?'
        // ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'abmn',
        //     'location' => 'Dhaka, Bangladesh',
        //     'email' => 'nayeem@gmail.com',
        //     'website' => 'https://www.abmn.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla in aliquid non doloremque veritatis architecto, impedit quae, consectetur eos quis recusandae et, eligendi cupiditate rem! Facere cumque impedit enim architecto?'
        // ]);
    }
}
