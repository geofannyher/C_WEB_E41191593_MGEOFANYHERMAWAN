<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class detail_mahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_mahasiswa') -> insert([
            'NIM'=>"41191593",
            'Nama'=>"M Geofany Hermawan",
            'jk'=>"laki laki",
            'Alamat'=>"Situbondo",
            'no_hp'=>"087776665443"
        ]);
    }
}
