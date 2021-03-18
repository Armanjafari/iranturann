<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'admin',
            'persian_name' => 'مدیر'          
        ]);
        DB::table('roles')->insert([
            'name' => 'seller',
            'persian_name' => 'فروشنده'          
        ]);
        DB::table('roles')->insert([
            'name' => 'messenger',
            'persian_name' => 'شبکه های اجتماعی'          
        ]);
    }
}
