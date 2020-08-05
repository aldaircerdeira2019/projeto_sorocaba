<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name'      =>      'admin',
                'descri'     =>      'Administrador do sistema',
            ],
            [
                'name'      =>      'usuario',
                'descri'     =>      'Usuario do sistema',
            ],
        ]);
    }
}
