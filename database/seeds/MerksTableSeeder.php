<?php

use Illuminate\Database\Seeder;

class MerksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('merks')->insert(array(
            [
                'nama_merk' => 'Samsung',
            ],

            [
                'nama_merk' => 'Iphone',
            ]
            ));
    }
}
