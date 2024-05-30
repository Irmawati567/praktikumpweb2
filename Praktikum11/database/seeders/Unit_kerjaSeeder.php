<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Unit_kerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pasiens')->insert([
            [
              'Rumah Sakit Jakarta',
              'Rumah Sakit Surabaya',
              'Klinik Bandung',
              'Puskesmas Yogyakarta',
              'Rumah Sakit Semarang',
            ],
        ]);
    }
}
