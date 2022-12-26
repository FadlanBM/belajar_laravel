<?php

namespace Database\Seeders;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class siswaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('siswa')->insert([
            'nama'=>'fadlan',
            'nomor_induk'=>'100',
            'alamat'=>'Bantul',
            'created_at'=>date('Y-m-d H:i:s')
        ]);
        DB::table('siswa')->insert(
            [
                'nama'=>'candra',
                'nomor_induk'=>'101',
                'alamat'=>'Imogiri',
                'created_at'=>date('Y-m-d H-i-s')
            ]
            );
        DB::table('siswa')->insert([
            'nama'=>'dian',
            'nomor_induk'=>'102',
            'alamat'=>'pandak',
            'created_at'=>date('Y-m-d H-i-s')
        ]);
    }
}
