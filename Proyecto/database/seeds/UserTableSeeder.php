<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
        'name' => 'admin',
        'email' => 'admin@admin.com',
        'password' => bcrypt('admin'),
        'is_subscriber' => '1',
        'photo' => '../images/nophoto.png',
        'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'name' => 'jj',
            'email' => 'jj@gmail.com',
            'password' => bcrypt('user'),
            'is_subscriber' => '1',
            'photo' => '../images/nophoto.png',
            'role' => 'user'
        ]);
        DB::table('users')->insert([
            'name' => 'cisco',
            'email' => 'cisco@gmail.com',
            'password' => bcrypt('user'),
            'is_subscriber' => '1',
            'photo' => '../images/nophoto.png',
            'role' => 'user'
        ]);
    }
}
