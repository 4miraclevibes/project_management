<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\StudyProgram;

class StudyProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StudyProgram::create([
            'name' => 'Teknik Komputer Jaringan',
            'code' => 'TK',
            'department_id' => 1
        ]);

        StudyProgram::create([
            'name' => 'Akutansi',
            'code' => 'AK',
            'department_id' => 2
        ]);

        StudyProgram::create([
            'name' => 'Teknik Otomotif',
            'code' => 'TO',
            'department_id' => 3
        ]);
    }
}
