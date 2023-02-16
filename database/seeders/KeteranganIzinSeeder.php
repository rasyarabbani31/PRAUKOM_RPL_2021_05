<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeteranganIzinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $keteranganizin = collect([
            [

                'id' => '1',
                'keterangan' => 'sakit',

            ],
            [

                'id' => '2',
                'keterangan' => 'izin',

            ],
            [

                'id' => '3',
                'keterangan' => 'alpha',

            ],
            [

                'id' => '4',
                'keterangan' => 'hadir',

            ]
        ]);
        $keteranganizin->each(fn ($ki) => DB::table('keterangan_izin')->insert($ki));
    }
}
