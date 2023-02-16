<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jurusan = collect([
            [

                'id' => '1',
                'nama_jurusan' => 'Multi Media',
                'singkatan_jurusan' => 'MM',

            ],
            [

                'id' => '2',
                'nama_jurusan' => 'Rekayasa Perangkat Lunak',
                'singkatan_jurusan' => 'RPL',

            ],
            [

                'id' => '3',
                'nama_jurusan' => 'Teknik Komputer Jaringan',
                'singkatan_jurusan' => 'TKJ',

            ],
            [

                'id' => '4',
                'nama_jurusan' => 'Teknik Kendaraan Ringan',
                'singkatan_jurusan' => 'TKR',

            ],
            [

                'id' => '5',
                'nama_jurusan' => 'Teknik Pengelasan',
                'singkatan_jurusan' => 'TPL',

            ],
            [

                'id' => '6',
                'nama_jurusan' => 'Teknik Permesinan',
                'singkatan_jurusan' => 'TP',

            ],[

                'id' => '7',
                'nama_jurusan' => 'Tata Busana',
                'singkatan_jurusan' => 'TB',

            ],
            [

                'id' => '8',
                'nama_jurusan' => 'Akuntasi',
                'singkatan_jurusan' => 'AK',

            ],
        ]);
        $jurusan->each(fn ($ju) => DB::table('jurusan')->insert($ju));
    }
}
