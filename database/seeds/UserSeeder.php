<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
           'nik' => '912912921',
           'name' => 'Raisa',
           'telp' => '0812901901',
           'email' => 'raisa@gmail.com',
           'foto' => 'poto.png',
           'id_kota' => '1',
           'username' => 'Raisa',
           'password' => bcrypt('123')
       ]);
    }
}
