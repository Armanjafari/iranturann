<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'mobile',
            'persian_name' => 'موبایل',
            
        ]);
        DB::table('categories')->insert([
            'name' => 'digital',
            'persian_name' => 'دیجیتال',
            
        ]);
    }
}
