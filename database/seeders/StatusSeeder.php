<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('statuses')->insert([
            'name' => 'Unknown',
        ]);
        DB::table('statuses')->insert([
            'name' => 'Contact established',
        ]);
        DB::table('statuses')->insert([
            'name' => 'CLP Champion(s) found',
        ]);
        DB::table('statuses')->insert([
            'name' => 'Resolution in process',
        ]);
        DB::table('statuses')->insert([
            'name' => 'Resolution passed',
        ]);
        DB::table('statuses')->insert([
            'name' => 'Delegate to Conference',
        ]);
    }
}
