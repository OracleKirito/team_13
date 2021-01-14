<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class team_13_company_seeder extends Seeder
{
    public function generateRandomCompanyName($i)
    {
        $comnames= ["Steam","Playstation","Apple","Google","Mcard"];

        return $comnames[$i];
    }
    public function generateRandomManagerName($i)
    {
        $mannames= ["諾艾爾","陳凱亞","溫迪","鐘麗莎","王凝光"];

        return $mannames[$i];
    }
    public function generateRandomAddressName($i)
    {
        $adrnames= ["台北市信義區信義路5段7號60樓","台北市信義區信義路五段7號73樓","台北市信義區市府路45號","台北市中山區中山北路二段42號5樓","台北市南港區南港路二段99-10號"];

        return $adrnames[$i];
    }
    public function generateRandomphone($i)
    {
        $phnnames= ["03-9542456","02-9583241","03-9856321","03-9541542","02-9521521"];

        return $phnnames[$i];
    }

    public function run()
    {

        for ($i=0; $i<5; $i++) {
            $c_name =$this->generateRandomCompanyName($i);
            $c_manager = $this->generateRandomManagerName($i);
            $c_phone = $this->generateRandomphone($i);
            $c_address =$this->generateRandomAddressName($i);
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));

            DB::table('company')->insert([
                'c_name' =>$c_name ,
                'c_manager' =>$c_manager ,
                'c_phone' =>$c_phone ,
                'c_address' =>$c_address ,
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }

    }
}
