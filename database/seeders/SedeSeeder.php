<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SedeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sedes')->insert(
            [
                'name'=>'sede uno',
                'image'=>'foto.jpg'
            ],
            [
                'name'=>'sede dos',
                'image'=>'foto.jpg'
            ],
            [
                'name'=>'sede tres',
                'image'=>'foto.jpg'
            ]
        );
    }
}
