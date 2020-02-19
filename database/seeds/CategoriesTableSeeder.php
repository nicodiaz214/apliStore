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
            'name' => 'Chat',
            'image' => 'img/chat.png',
        ]);
        DB::table('categories')
        ->insert([
            'name' => 'Fitness',
            'image' => 'img/fitnes.png',
        ]);
        DB::table('categories')
        ->insert([
            'name' => 'Fotos',
            'image' => 'img/fotos.png',
        ]);
}
}