<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            for ($i=0; $i <= 1000000 ; $i++) 
            { 
            DB::table('trainers')->insert(
                ['trainer_name' => 'ddddd', 
                'company_id' => '11',
                'trainer_email' => 'abc@gmail.com',
                'trainer_phone' =>'123456']
            );
        }
    }
}
