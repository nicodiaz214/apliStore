<?php

use Illuminate\Database\Seeder;

class ApplicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('applications')
        ->insert([
           'user_id' => '1',
           'category_id' => '3',
           'name' => 'Abs 2020',
           'image_url' => 'img/abs.png',
           'description' => 'Abdominales de hierro',
          'price' => '100',
        ]);

        factory(\App\Application::class,20)->create();
}
}