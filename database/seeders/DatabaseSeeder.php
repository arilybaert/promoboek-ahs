<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Course;
use App\Models\Job;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // jobs
        for($i = 1; $i < 8; $i++) {
            $jobs = Job::factory()->create();
        }

    // users

        // $admin = User::factory()->create([
        //     'first_name' => 'Dieter',
        //     'last_name' => 'Wullaert',
        //     'email' => 'dwullaert@ahs.be',
        //     'password' => bcrypt('secret'),
        //     'role' => 2,
        //     'course_id' => 5,
        // ]);
        // $student = User::factory()->create([
        //     'name' => 'Ari Lybaert',
        //     'email' => 'arilybaert@ahs.be',
        //     'password' => bcrypt('secret'),
        //     'role' => 2
        // ]);

        /*
        ** COURSE
        */

        /*
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
        $teacher = Course::factory()->create([
            'title' => 'Teacher',
            'title_short' => 'teacher',
            'img_url' => '',
        ]);
*/
        /*
        ** SUB_COURSE
        */

/*
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
        $pm = Sub_course::factory()->create([
            'title' => 'Printmedia',
            'title_short' => 'printmedia',
            'course_id' => 4
        ]);
        $cm = Sub_course::factory()->create([
            'title' => 'Photo Design',
            'title_short' => 'crossmedia',
            'course_id' => 4
        ]);
*/
        /*
        ** STUDENTS
        */
/*
        // CMO GD
        for($i = 1; $i < 6; $i++) {
            $students = User::factory()->create([
                'course_id' => '1',
                'sub_course_id' => '1',
                'password' => bcrypt('secret'),
                'role' => 2
            ]);
        }

        // CMO PD
        for($i = 6; $i < 11; $i++) {
            $students = User::factory()->create([
                'course_id' => '1',
                'sub_course_id' => '2',
                'password' => bcrypt('secret'),
                'role' => 2
            ]);
        }

        // NMD
        for($i = 11; $i < 21; $i++) {
            $students = User::factory()->create([
                'course_id' => '3',
                'password' => bcrypt('secret'),
                'role' => 2
            ]);
        }

        // GMB PM
        for($i = 1; $i < 6; $i++) {
            $students = User::factory()->create([
                'course_id' => '4',
                'sub_course_id' => '3',
                'password' => bcrypt('secret'),
                'role' => 2
            ]);
        }

        // GMB CM
        for($i = 6; $i < 11; $i++) {
            $students = User::factory()->create([
                'course_id' => '4',
                'sub_course_id' => '4',
                'password' => bcrypt('secret'),
                'role' => 2
            ]);
        }
*/

        /*
        ** IMAGE
        */
/*
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

        // gmb
        for($i = 21; $i < 31; $i++) {
            $images = Image::factory()->create([
                'url' => 'src/img/portfolio/cmo/cmo-'. rand(1,9) .'.jpg',
                'student_id' => $i,
                'thumbnail' => 1,
            ]);
        }
*/
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
