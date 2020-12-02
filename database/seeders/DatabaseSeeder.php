<?php

// namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // CMO GD
        for($i = 1; $i < 5; $i++) {
            $students = Student::factory()->count(3)->create([
                'thumbnail' => 'src/img/portfolio/cmo/cm-1'. $i .'.jpg',
                'course_id' => '1',
                'sub_course_id' => '1',
            ]);
        }

        // CMO PD
        for($i = 5; $i < 10; $i++) {
            $students = Student::factory()->count(3)->create([
                'thumbnail' => 'src/img/portfolio/cmo/cm-'. $i .'.jpg',
                'course_id' => '1',
                'sub_course_id' => '1',
            ]);
        }
        // NMD
        for($i = 5; $i < 10; $i++) {
            $students = Student::factory()->count(3)->create([
                'thumbnail' => 'src/img/portfolio/nmd/nmd-'. $i .'.jpg',
                'course_id' => '3',
            ]);
            }
    }
}
