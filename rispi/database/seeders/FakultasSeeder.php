<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         DB::table('fakultas')->insert([
            'nama_fakultas' => 'Fakultas Ilmu komputer Rekayasa',
            'nama_dekan' => 'Dr. Wijang Widhiarso, M.kom',
            'nama_wakil_dekan' => ' Yoannita, M.kom'
         ]);
    }
}
