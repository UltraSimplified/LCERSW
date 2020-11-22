<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('parties')->insert([
            'name'              => 'Conservatives',
            'short_name'        => 'CON',
            'colour'            => '#0575C9',
            'current_membership'    => 191000,
        ]);

        DB::table('parties')->insert([
            'name'              => 'Labour',
            'short_name'        => 'LAB',
            'colour'            => '#E91D0E',
            'current_membership'    => 552835,
        ]);

        DB::table('parties')->insert([
            'name'              => 'Liberal Democrats',
            'short_name'        => 'LIB',
            'colour'            => '#F8ED2E',
            'current_membership'    => 120845,
        ]);

        DB::table('parties')->insert([
            'name'              => 'Green Party',
            'short_name'        => 'GRN',
            'colour'            => '#5FB25F',
            'current_membership'    => 48500,
        ]);
    }
}
