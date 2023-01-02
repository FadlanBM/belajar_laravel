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
            'nama'=>'Fadlan Buwnono Mukti',
            'kelas'=>'XI RPL 1',
            'created_at'=>date('Y-m-d H-i-s')
        ]);
        DB::table('siswa')->insert([
            'nis'=>'16045',
            'nama'=>'Fajar Permana Putra',
            'kelas'=>'XI RPL 1',
            'created_at'=>date('Y-m-d H-i-s')
        ]);
        DB::table('siswa')->insert([
            'nis'=>'16046',
            'nama'=>'Galih Nur Ardiansyah',
            'kelas'=>'XI RPL 1',
            'created_at'=>date('Y-m-d H-i-s')
        ]);
    }
}
