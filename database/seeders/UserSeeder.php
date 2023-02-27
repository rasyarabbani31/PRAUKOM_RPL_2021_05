<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $User = collect([
            [

                'id' => '1',
                'username' => 'kerja bagus',
                'password' => Hash::make('123'),
                'kode_level' => '1',

            ]
        ]);
        $User->each(fn ($u) => DB::table('user')->insert($u));
    }
}
