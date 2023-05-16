<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         DB::table('fakultas')->insert([
            [
            'id'=> Uuid::uuid4(),
            'nama_fakultas' => 'Fakultas Ilmu komputer Rekayasa',
            'nama_dekan' => 'Dr. Wijang Widhiarso, M.kom',
            'nama_wakil_dekan' => ' Yoannita, M.kom',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
            'id'=> Uuid::uuid4(),
            'nama_fakultas' => 'Fakultas Ilmu Ekonomi dan Bisnis',
            'nama_dekan' => 'Dr. Yulizar Kasih, S.E, M.Si',
            'nama_wakil_dekan' => 'Dr.Anton Arisman,S.E M.Si',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}