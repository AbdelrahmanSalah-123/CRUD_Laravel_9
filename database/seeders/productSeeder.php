<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Carbon\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Product::factory()
            ->count(5)->create();
    }
}