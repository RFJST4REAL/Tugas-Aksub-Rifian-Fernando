<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Products;
use App\Models\category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();
        //\App\Models\Products::factory(10)->create();
        for($i = 1; $i < 11; $i++){
            category::create([
                'name' => 'category'.$i,
            ]);
        }
    }
}
