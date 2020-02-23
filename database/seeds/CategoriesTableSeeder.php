<?php

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
        DB::table('categories')
        ->insert([
            'name' => 'Running',
            'image' => 'img/running.png',
        ]);
        DB::table('categories')
        ->insert([
            'name' => 'Nutricion',
            'image' => 'img/nutricion.png',
        ]);
        DB::table('categories')
        ->insert([
            'name' => 'Musculacion',
            'image' => 'img/musculacion.png',
        ]);
        DB::table('categories')
        ->insert([
            'name' => 'Elongacion',
            'image' => 'img/elongacion.png',
        ]);
        DB::table('categories')
        ->insert([
            'name' => 'Yoga',
            'image' => 'img/yoga.png',
        ]);
        DB::table('categories')
        ->insert([
            'name' => 'Indumentaria',
            'image' => 'img/indumentaria.png',
        ]);
}
}