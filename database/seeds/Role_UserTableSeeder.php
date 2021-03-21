<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;
class Role_UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_user')->insert([
            'role_id' => 3,
            'user_id' => 1,
            'percent' => 20
        ]);
        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 5,
            'percent' => 80
        ]);
        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 4,
            'percent' => 3    
        ]);
        DB::table('role_user')->insert([
            'role_id' => 3,
            'user_id' => 3,
            'percent' => 8    
        ]);
        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 2,
            'percent' => 10    
        ]);
        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1,
            'percent' => 5     
        ]);
    
    }
}
