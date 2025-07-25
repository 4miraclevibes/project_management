<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create([
            'name' => 'Teknik Komputer Jaringan',
            'code' => 'TKJ'
        ]);

        Department::create([
            'name' => 'Akutansi',
            'code' => 'AK'
        ]);

        Department::create([
            'name' => 'Teknik Otomotif',
            'code' => 'TO'
        ]);
    }
}
