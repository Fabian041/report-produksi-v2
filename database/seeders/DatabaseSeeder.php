<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // role table seed
        $roles = ['administrator','SPV','LDR'];

        for($i=0; $i<count($roles); $i++){
            
            \Illuminate\Support\Facades\DB::table('roles')->insert([
                'role' => $roles[$i]
            ]);
        }
    }
}