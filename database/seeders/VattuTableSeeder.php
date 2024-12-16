<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VattuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nvkvattu')->insert([
        'nvkMaVTu'=>'DD01',
        'nvkTenVTu'=>'Đầu DVD Hitachi 1 cửa',
        'nvkDvTinh'=>'Bộ',
        'nvkPhanTram'=>40,
        ]);
    }
}
