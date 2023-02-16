<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $leveluser = collect([
            [

                'id' => '1',
                'nama_level' => 'super admin',

            ],
            [

                'id' => '2',
                'nama_level' => 'admin',

            ],
            [

                'id' => '3',
                'nama_level' => 'operator',

            ]
        ]);
        $leveluser->each(fn ($lu) => DB::table('level_user')->insert($lu));
    }
}
