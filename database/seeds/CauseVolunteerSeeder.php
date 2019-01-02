<?php

use Illuminate\Database\Seeder;

class CauseVolunteerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $volunteers =App\Volunteer::lists('id');
        $cause = App\Cause::lists('id');


        //Esse laço abaixo serve para pupulçar a tabela cause_volunter
        $counter = 0;
        do {
            DB::table('cause_volunteer')->insert([
                'cause_id'=>$cause->random(),
                'volunteer_id' => $volunteers->random(),

            ]);
            $counter++;

        } while ($counter <= 100);
    }
}
