<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    protected $toTruncate = ['institution','volunteers'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->truncateTables();

        $this->call(InstitutionSeeder::class);
        $this->call(VolunteerSeeder::class);
        $this->call(CauseSeeder::class);
        $this->call(CauseVolunteerSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // $this->call(UserTableSeeder::class);
       // $this->call(VolunteerSeeder::class);

        Model::reguard();
    }

    public function truncateTables(){
        
        foreach($this->toTruncate as $table){
            DB::table($table)->truncate();

        }
    }
}
