<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class team_13_purchase_record_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */




        public function generateRandomString()
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 15 ; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

        public function run()
    {
        for ($i=0; $i<200; $i++) {
            $serial_number =$this->generateRandomString();
            $b_date = Carbon::now()->subYears(rand(1, 10))->subMonths(rand(0, 12))->subRealDays(rand(0,31));
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));

            DB::table('purchase_record')->insert([
                'b_number' => rand(10000000,20000000),
                'b_date' => $b_date,
                'serial_number' => $serial_number,
                'a_id' => rand(1,20),
                'p_id' => rand(1,50),
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }

}
