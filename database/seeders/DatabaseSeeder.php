<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Timetable;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{


    public function run(): void
    {
        Timetable::create([
            'class_id',
            'subject_id',
            'day_id',
            'start_time',
            'end_time',
            'roo-no',
        ]);


    }
}
