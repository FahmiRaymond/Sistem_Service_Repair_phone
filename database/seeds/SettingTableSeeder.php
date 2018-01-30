<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert(array(
            [
                'nama_perusahaan'=>'Service Center 86',
                'alamat'=>'JL. Galaxy Eslapan No.8',
                'telepon'=>'081280008000',
            ]
        ));
    }
}
