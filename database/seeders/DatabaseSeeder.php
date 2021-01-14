<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(team_13_member_seeder::class);
        $this->call(team_13_purchase_record_seeder::class);
        $this->call(team_13_product_name_seeder::class);
        $this->call(team_13_company_seeder::class);

    }
}
