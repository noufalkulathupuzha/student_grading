<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('pass123'),
        ]);
        Student::factory()->create([
            "name" => "Anu",
            "address" => "Anu Villa",
            "date_of_birth" => "1998-02-22",
            "registration_number" => "00012345",
            "course" => "BSC",
            "branch" => "Computer Science",
            "user_id" => 1
        ]);


        $students = [
            [
                "name" => "Emma",
                "address" => "Emma's Residence",
                "date_of_birth" => "1998-02-18",
                "registration_number" => "00011111",
                "course" => "BSc",
                "branch" => "Chemistry",
                "user_id" => 1
            ],
            [
                "name" => "Daniel",
                "address" => "Daniel's Apartment",
                "date_of_birth" => "1999-06-30",
                "registration_number" => "00022222",
                "course" => "BA",
                "branch" => "History",
                "user_id" => 1
            ],
            [
                "name" => "Olivia",
                "address" => "Olivia's House",
                "date_of_birth" => "1997-04-22",
                "registration_number" => "00033333",
                "course" => "BEng",
                "branch" => "Electrical Engineering",
                "user_id" => 1
            ],
            [
                "name" => "Matthew",
                "address" => "Matthew's Dormitory",
                "date_of_birth" => "2000-08-10",
                "registration_number" => "00044444",
                "course" => "BSc",
                "branch" => "Physics",
                "user_id" => 1
            ],
            [
                "name" => "Ava",
                "address" => "Ava's Apartment",
                "date_of_birth" => "1996-11-25",
                "registration_number" => "00055555",
                "course" => "BBA",
                "branch" => "Marketing",
                "user_id" => 1
            ],
            [
                "name" => "Liam",
                "address" => "Liam's Residence",
                "date_of_birth" => "1998-09-05",
                "registration_number" => "00066666",
                "course" => "BSc",
                "branch" => "Mathematics",
                "user_id" => 1
            ],
            [
                "name" => "Sophia",
                "address" => "Sophia's House",
                "date_of_birth" => "1999-12-15",
                "registration_number" => "00077777",
                "course" => "BA",
                "branch" => "English Literature",
                "user_id" => 1
            ],
            [
                "name" => "Jackson",
                "address" => "Jackson's Apartment",
                "date_of_birth" => "1997-07-29",
                "registration_number" => "00088888",
                "course" => "BEng",
                "branch" => "Mechanical Engineering",
                "user_id" => 1
            ],
            [
                "name" => "Mia",
                "address" => "Mia's Dormitory",
                "date_of_birth" => "2000-04-12",
                "registration_number" => "00099999",
                "course" => "BSc",
                "branch" => "Biology",
                "user_id" => 1
            ],
            [
                "name" => "James",
                "address" => "James's Apartment",
                "date_of_birth" => "1996-10-20",
                "registration_number" => "00100000",
                "course" => "BBA",
                "branch" => "Finance",
                "user_id" => 1
            ],
            [
                "name" => "Ella",
                "address" => "Ella's Residence",
                "date_of_birth" => "1998-03-14",
                "registration_number" => "00111111",
                "course" => "BSc",
                "branch" => "Environmental Science",
                "user_id" => 1
            ],
            [
                "name" => "Benjamin",
                "address" => "Benjamin's Apartment",
                "date_of_birth" => "1999-07-02",
                "registration_number" => "00122222",
                "course" => "BA",
                "branch" => "Sociology",
                "user_id" => 1
            ],
            [
                "name" => "Amelia",
                "address" => "Amelia's House",
                "date_of_birth" => "1997-05-18",
                "registration_number" => "00133333",
                "course" => "BEng",
                "branch" => "Aerospace Engineering",
                "user_id" => 1
            ],
            [
                "name" => "William",
                "address" => "William's Dormitory",
                "date_of_birth" => "2000-09-12",
                "registration_number" => "00144444",
                "course" => "BSc",
                "branch" => "Geology",
                "user_id" => 1
            ],
            [
                "name" => "Charlotte",
                "address" => "Charlotte's Apartment",
                "date_of_birth" => "1996-12-05",
                "registration_number" => "00155555",
                "course" => "BBA",
                "branch" => "Human Resource Management",
                "user_id" => 1
            ],
            [
                "name" => "Oliver",
                "address" => "Oliver's Residence",
                "date_of_birth" => "1998-08-21",
                "registration_number" => "00166666",
                "course" => "BSc",
                "branch" => "Computer Science",
                "user_id" => 1
            ],
            [
                "name" => "Amelia",
                "address" => "Amelia's Apartment",
                "date_of_birth" => "1999-02-28",
                "registration_number" => "00177777",
                "course" => "BA",
                "branch" => "Political Science",
                "user_id" => 1
            ],
            [
                "name" => "Henry",
                "address" => "Henry's House",
                "date_of_birth" => "1997-10-15",
                "registration_number" => "00188888",
                "course" => "BEng",
                "branch" => "Chemical Engineering",
                "user_id" => 1
            ],
            [
                "name" => "Isabella",
                "address" => "Isabella's Dormitory",
                "date_of_birth" => "2000-06-08",
                "registration_number" => "00199999",
                "course" => "BSc",
                "branch" => "Neuroscience",
                "user_id" => 1
            ],
            [
                "name" => "Ethan",
                "address" => "Ethan's Apartment",
                "date_of_birth" => "1996-04-01",
                "registration_number" => "00200000",
                "course" => "BBA",
                "branch" => "Entrepreneurship",
                "user_id" => 1
            ],
        ];
        foreach ($students as $studentData) {
            Student::factory()->create($studentData);
        }


    }
}
