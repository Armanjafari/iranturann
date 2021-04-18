<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CenterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('centers')->insert([
            'name' => 'نگین',
            'city_id' => 1          
        ]);
        DB::table('centers')->insert([
            'name' => 'ارکید',
            'city_id' => 1                  
        ]);
        DB::table('centers')->insert([
            'name' => 'حلال',
            'city_id' => 1                    
        ]);

        DB::table('centers')->insert([
            'name' => 'بازار امام',
            'city_id' => 1,
        ]);
    }
}
