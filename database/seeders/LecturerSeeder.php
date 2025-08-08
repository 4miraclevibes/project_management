<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lecturer;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lecturerRole = Role::where('name', 'teacher')->first();

        $user = User::create([
            'name' => 'Teacher User',
            'email' => 'teacher@example.com',
            'password' => Hash::make('password'),
            'role_id' => $lecturerRole->id,
        ]);

        Lecturer::create([
            'user_id' => $user->id,
            'study_program_id' => 1,
            'nip' => '987654321',
            'phone' => '08123456789',
            'address' => 'Jl. Contoh No. 2',
            'profile_picture' => 'path/to/profile_picture.jpg',
        ]);
    }
}
