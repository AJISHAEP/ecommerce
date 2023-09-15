<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin; // Correct namespace for the Admin model

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {
        Admin::create([
            'name' => 'steve',
            'username' => 'admin',
            'password' => bcrypt('captain'),
        ]);
    }
}
