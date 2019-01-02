<?php

use Illuminate\Database\Seeder;

class CauseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $causes =[
            'Meio Ambiente',
            'Animais',
            'Elefantes',
            "Patrimônio histórico",
            'Crianças',
            'Ensino de Adultos'

        ];

        foreach($causes as $cause){
            App\Cause::create(['cause'=>$cause])->save();
        }
    }
}
