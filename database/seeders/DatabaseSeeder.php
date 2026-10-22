<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Student::create([
            'student_id' => 'STD001',
            'name' => 'Alice Johnson',
            'email' => 'alice.johnson@university.edu',
            'phone' => '555-0101',
            'date_of_birth' => '2004-03-15',
            'gender' => 'Female',
            'address' => '123 Oak Street, Springfield',
            'major' => 'Computer Science',
            'enrollment_year' => 2022,
            'gpa' => 3.85,
        ]);

        Student::create([
            'student_id' => 'STD002',
            'name' => 'Bob Martinez',
            'email' => 'bob.martinez@university.edu',
            'phone' => '555-0102',
            'date_of_birth' => '2003-07-22',
            'gender' => 'Male',
            'address' => '456 Pine Avenue, Springfield',
            'major' => 'Electrical Engineering',
            'enrollment_year' => 2021,
            'gpa' => 3.92,
        ]);

        Student::create([
            'student_id' => 'STD003',
            'name' => 'Carol Davis',
            'email' => 'carol.davis@university.edu',
            'phone' => '555-0103',
            'date_of_birth' => '2004-11-08',
            'gender' => 'Female',
            'address' => '789 Maple Drive, Springfield',
            'major' => 'Business Administration',
            'enrollment_year' => 2023,
            'gpa' => 3.67,
        ]);

        Student::create([
            'student_id' => 'STD004',
            'name' => 'David Chen',
            'email' => 'david.chen@university.edu',
            'phone' => '555-0104',
            'date_of_birth' => '2003-01-30',
            'gender' => 'Male',
            'address' => '321 Elm Street, Springfield',
            'major' => 'Mechanical Engineering',
            'enrollment_year' => 2021,
            'gpa' => 3.78,
        ]);

        Student::create([
            'student_id' => 'STD005',
            'name' => 'Emma Wilson',
            'email' => 'emma.wilson@university.edu',
            'phone' => '555-0105',
            'date_of_birth' => '2004-05-19',
            'gender' => 'Female',
            'address' => '654 Birch Lane, Springfield',
            'major' => 'Psychology',
            'enrollment_year' => 2022,
            'gpa' => 3.55,
        ]);

        Student::create([
            'student_id' => 'STD006',
            'name' => 'Frank Brown',
            'email' => 'frank.brown@university.edu',
            'date_of_birth' => '2003-09-12',
            'gender' => 'Male',
            'address' => '987 Cedar Court, Springfield',
            'major' => 'Mathematics',
            'enrollment_year' => 2021,
            'gpa' => 3.95,
        ]);
    }
}
