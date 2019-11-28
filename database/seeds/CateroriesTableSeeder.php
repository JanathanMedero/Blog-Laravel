<?php

use App\Category;
use Illuminate\Database\Seeder;

class CateroriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Tecnología']);
        Category::create(['name' => 'Videojuegos']);
        Category::create(['name' => 'Politica']);
        Category::create(['name' => 'Medio Ambiente']);
        Category::create(['name' => 'Cultura']);
        Category::create(['name' => 'Educación']);
    }
}
