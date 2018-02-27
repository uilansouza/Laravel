<?php

use Illuminate\Database\Seeder;

class NomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('volunteers')->truncate();
        factory(App\Volunteer::class, 30)->create();
/*      

        DB::table('volunteers')->insert([
          'name' => 'Joao',
          'email' => 'joao@treinaweb.com.br',
          'phone' => '11 7070-7070'
        ]);*/
    }
}
