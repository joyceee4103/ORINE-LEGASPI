<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('classes')->insert([
            ['name' => 'BSIT 4A', 'teacher' => 'Mr. Cruz'],
            ['name' => 'BSIT 4B', 'teacher' => 'Ms. Santos'],
        ]);
    }
}
