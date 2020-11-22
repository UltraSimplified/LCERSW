<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('regions')->insert([
            'name' => 'North East',
        ]);

        DB::table('regions')->insert([
            'name' => 'North West',
        ]);

        DB::table('regions')->insert([
            'name' => 'Yorkshire and the Humber',
        ]);

        DB::table('regions')->insert([
            'name' => 'West Midlands',
        ]);

        DB::table('regions')->insert([
            'name' => 'East Midlands',
        ]);

        DB::table('regions')->insert([
            'name' => 'South West',
        ]);

        DB::table('regions')->insert([
            'name' => 'South East',
        ]);

        DB::table('regions')->insert([
            'name' => 'East of England',
        ]);

        DB::table('regions')->insert([
            'name' => 'Greater London',
        ]);
    }
}
