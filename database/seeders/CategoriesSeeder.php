<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        Category::create(['name' => 'Italiana']);
        Category::create(['name' => 'Mexicana']);
        Category::create(['name' => 'Vegetariana']);
    }
}
