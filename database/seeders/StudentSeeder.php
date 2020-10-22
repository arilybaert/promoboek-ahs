<?php

use App\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // INITIALISE FAKER LIB
        require_once 'vendor/autoload.php';


        $faker = Faker\Factory::create();


        $student = new Student();

        $student->first_name = $faker->firstName;
        $student->last_name = $faker->lastName;
        $student->email->last_name = $faker->firstName . $faker->lastName . '@arteveldehs.be';
        $student->major = 'CMO';
        $student->motto = $faker->catchPhrase;
        $student->bio = $faker->realText($maxNbChars = 200, $indexSize = 2);
        $student->thumbnail = $faker->image('public/storage/images',640,480, null, false);
        $student->profilepicture = $faker->image('public/storage/images',640,480, null, false);


        // $blog->image = 'https://bit.ly/3ecPjVo';

        $student->save();


    }
}
