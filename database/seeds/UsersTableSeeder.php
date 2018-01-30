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
        DB::table('users')->insert(array(
            [
                'name' => 'admin',
                'email' => 'admin@cs.com',
                'password' => bcrypt('secret'),
                'foto' => 'user.png',
                'level' => 1,
            ],
            
            [
                'name' => 'jeffrey',
                'email' => 'jeffrey@cs.com',
                'password' => bcrypt('secret'),
                'foto' => 'user.png',
                'level' => 2,
            ]
        ));
    }
}
