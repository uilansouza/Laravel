<?php

use Illuminate\Database\Seeder;

class VolunteerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @ return void
     */
    public function run()
    {
       DB::table('volunteers')->truncate();//limpa a tabela antes de executar o comando que popula a tabela
        factory(App\Volunteer::class, 150)->create();
    

        
    }
}
