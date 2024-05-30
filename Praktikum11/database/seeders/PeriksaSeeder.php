<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('periksas')->insert([
            [
                'tanggal' => '2024-01-20',
                'berat' => 'Rustandi',
                'tinggi' => '165',
                'tensi' => '120/90',
                'keterangan' => 'Normal',
                'pasien_id' => '1',
                'dokter_id' => '3',
            ],
            [
                'tanggal' => '2024-01-12',
                'berat' => 'Rindiani',
                'tinggi' => '160',
                'tensi' => '100/90',
                'keterangan' => 'Normal',
                'pasien_id' => '1',
                'dokter_id' => '3',
            ],
            [
                'tanggal' => '2024-01-20',
                'berat' => 'Rusdi',
                'tinggi' => '165',
                'tensi' => '100/100',
                'keterangan' => 'Normal',
                'pasien_id' => '1',
                'dokter_id' => '3',
            ],

        ]);
    }
}
