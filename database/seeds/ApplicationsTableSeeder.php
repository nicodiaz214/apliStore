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
        //DB::table('applications')
        //->insert([
        //  'user_id' => '1',
        //   'category_id' => '2',
        //  'name' => 'Rapido',
        //   'image_url' => 'img/rapido.png',
        //   'description' => 'Mejora tus carreras',
        //  'price' => '100',
        //]);

        factory(\App\Application::class,20)->create();
}
}