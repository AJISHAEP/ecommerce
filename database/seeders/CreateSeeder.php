<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\catagory;
class CreateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        catagory::create([
            'name' =>'mobile',
        ]);
        catagory::create([
            'name' =>'fashion',
        ]);
        catagory::create([
            'name' =>'perfumes',
        ]);
    }
}
