<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('schedules')->insert([
            [
                'classroom_id' => 1, // make sure classroom with ID 1 exists
                'day' => 'Monday',
                'start_time' => '09:00:00',
                'end_time' => '10:30:00',
                'room' => 'Room 101',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'classroom_id' => 1,
                'day' => 'Wednesday',
                'start_time' => '13:00:00',
                'end_time' => '14:30:00',
                'room' => 'Room 102',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'classroom_id' => 2, // another classroom
                'day' => 'Friday',
                'start_time' => '08:00:00',
                'end_time' => '09:30:00',
                'room' => 'Room 201',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
