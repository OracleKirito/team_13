<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class team_13_product_name_seeder extends Seeder
{
    public function generateRandomCompanyName($num)
    {
        $comnames= ["Steam","Playstation","Apple","Google","Mcard"];

        return $comnames[$num];
    }


    public function generateRandomplatName($num)
    {
        $comnames= ["PC","Playstation","IOS","Google","Mobile"];

        return $comnames[$num];
    }

    public function price()
    {
        $price = ["50","150","300","500","1000","2000","3000","5000","10000"];
        return $price[rand(0,count($price)-1)] ;
    }
    public function run()
    {
        for ($i=0; $i<50; $i++) {
            $j=rand(0,4);
            $platform =$this->generateRandomplatName($j);
            $price = $this->price();
            $company=$j+1;
            $p_name=$this->generateRandomCompanyName($j).$price;
            $random_datetime = Carbon::now()->subMinutes(rand(1, 55));

            DB::table('product_name')->insert([
                'platform'=>$platform,
                'p_name'=>$p_name,
                'price'=>$price,
                'company'=> $company,
                'inventory' => rand(1,10000),
                'created_at' => $random_datetime,
                'updated_at' => $random_datetime
            ]);
        }
    }
}
