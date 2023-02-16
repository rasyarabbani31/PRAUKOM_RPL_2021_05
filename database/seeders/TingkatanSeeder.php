<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TingkatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = collect([
            [

                'id' => '1',
                'tingkatan' => 'X.A',

            ],
            [

                'id' => '2',
                'tingkatan' => 'X.B',

            ],
            [

                'id' => '3',
                'tingkatan' => 'X.C',

            ],
            [

                'id' => '4',
                'tingkatan' => 'XI.A',

            ],
            [

                'id' => '5',
                'tingkatan' => 'XI.B',

            ],
            [

                'id' => '6',
                'tingkatan' => 'XI.C',

            ],
            [

                'id' => '7',
                'tingkatan' => 'XII.A',

            ],
            [

                'id' => '8',
                'tingkatan' => 'XII.B',

            ],
            [

                'id' => '9',
                'tingkatan' => 'XII.C',

            ]
        ]);
        $kelas->each(fn ($kl) => DB::table('kelas')->insert($kl));
    }
}
