<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'nis'=>'16044',
            'absen'=>'17',
            'nama'=>'Fadlan Buwono Mukti',
            'kelas'=>'XI',
            'keahlian'=>'RPL 1'
        ]);
        DB::table('siswa')->insert([
            'nis'=>'16045',
            'absen'=>'18',
            'nama'=>'Fajar Permana Putra',
            'kelas'=>'XI',
            'keahlian'=>'RPL 1'
        ]);
        DB::table('siswa')->insert([
            'nis'=>'16046',
            'absen'=>'19',
            'nama'=>'Galih ',
            'kelas'=>'XI',
            'keahlian'=>'RPL 1'
        ]);
    }
}
