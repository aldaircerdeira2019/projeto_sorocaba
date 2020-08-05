<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            
            [
                'name'=>'Aldair campos Cerdeira',
                'email'=>'admin@admin',
                'password'=>Hash::make('12345678'),

            ]
        ]);
    }
}
