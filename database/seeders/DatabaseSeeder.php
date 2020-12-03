<?php

// namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Student;
use App\Models\Course;
use App\Models\Image;
use App\Models\Sub_course;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*
        ** COURSE
        */


        $cmo = Course::factory()->create([
            'title' => 'Crossmedia-ontwerp',
            'title_short' => 'cmo',
            'img_url' => 'src/img/home/cmo.jpg',
        ]);
        $avd = Course::factory()->create([
            'title' => 'Audiovisual Design',
            'title_short' => 'avd',
            'img_url' => 'src/img/home/avd.jpg',
        ]);
        $nmd = Course::factory()->create([
            'title' => 'New Media Development',
            'title_short' => 'nmd',
            'img_url' => 'src/img/home/nmd.jpg',
        ]);
        $gmb = Course::factory()->create([
            'title' => 'Grafimedia Beleid',
            'title_short' => 'gmb',
            'img_url' => 'src/img/home/gmb.jpg',
        ]);

        /*
        ** SUB_COURSE
        */


        $gd = Sub_course::factory()->create([
            'title' => 'Graphic Design',
            'title_short' => 'graphic-design',
            'course_id' => 1
        ]);
        $pd = Sub_course::factory()->create([
            'title' => 'Photo Design',
            'title_short' => 'photo-design',
            'course_id' => 1
        ]);

        /*
        ** STUDENTS
        */

        // CMO GD
        for($i = 1; $i < 6; $i++) {
            $students = Student::factory()->create([
                'course_id' => '1',
                'sub_course_id' => '1',
            ]);
        }

        // CMO PD
        for($i = 6; $i < 11; $i++) {
            $students = Student::factory()->create([
                'course_id' => '1',
                'sub_course_id' => '2',
            ]);
        }
        // NMD
        for($i = 11; $i < 21; $i++) {
            $students = Student::factory()->create([
                'course_id' => '3',
            ]);
            }


        /*
        ** IMAGE
        */

        // each student gets thumbnail image
        // cmo
        for($i = 1; $i < 11; $i++) {
            $images = Image::factory()->create([
                'url' => 'src/img/portfolio/cmo/cmo-'. rand(1,9) .'.jpg',
                'student_id' => $i,
                'thumbnail' => 1,
            ]);
        }
        // nmd
        for($i = 11; $i < 21; $i++) {
            $images = Image::factory()->create([
                'tags' => 'JS, Python, Linux',
                'url' => 'src/img/portfolio/nmd/nmd-'. rand(1,9) .'.png',
                'student_id' => $i,
                'thumbnail' => 1
            ]);
        }

        /*
        // each student gets other portfolio images
        for($j = 0; $j < 4; $j++) {
            for($i = 1; $i < 11; $i++) {
                $images = Image::factory()->create([
                    'url' => 'src/img/portfolio/cmo/cmo-'. rand(1,9) .'.jpg',
                    'student_id' => $i,
                    'thumbnail' => 0,
                ]);
            }
            // nmd
            for($i = 11; $i < 21; $i++) {
                $images = Image::factory()->create([
                    'tags' => 'JS, Python, Linux',
                    'url' => 'src/img/portfolio/nmd/nmd-'. rand(1,9) .'.png',
                    'student_id' => $i,
                    'thumbnail' => 0,
                ]);
            }
        }
        */
    }
}
