<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1= new Category;
        $category1->name="Deportes";
        $category1->descripcion="Categoria basada en deportes";
        $category1->active=true;
        $category1->save();

        $category1= new Category;
        $category1->name="Accion";
        $category1->descripcion="Categoria basada en Juegos trepidantes";
        $category1->active=true;
        $category1->save();

        $category1= new Category;
        $category1->name="Aventuras";
        $category1->descripcion="Categoria basada en deportes";
        $category1->active=true;
        $category1->save();
    }
}
