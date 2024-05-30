<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ParamedikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Paramediks')->insert([
            [
                'nama' => 'Budianto',
                'gender' => 'L',
                'tmp_lahir' => 'Jakarta',
                'tgl_lahir' => '1990-01-01',
                'kategori' => 'umum',
                'telpon' => '083151410793',
                'alamat' => 'Jl. Merdeka No.1',
            ],
            [
                'nama' => 'Siti Aminah',
                'gender' => 'P',
                'tmp_lahir' => 'Jakarta',
                'tgl_lahir' => '1995-03-09',
                'kategori' => 'umum',
                'telpon' => '083151410793',
                'alamat' => 'Jl. Merdeka No.1',
            ],
            [
                'nama' => 'Santoso',
                'gender' => 'L',
                'tmp_lahir' => 'Jakarta',
                'tgl_lahir' => '1980-01-01',
                'kategori' => 'umum',
                'telpon' => '083151410793',
                'alamat' => 'Jl. Merdeka No.1',
            ],
        ]);
    }
}
