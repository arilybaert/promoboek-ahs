<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->firstName . $this->faker->lastName . '@student.arteveldehs.be',
            'bio' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'catchPhrase' => $this->faker->catchPhrase,
            'thumbnail' => 'src/img/portfolio/cmo/cm-' . $this->faker->numberBetween($min = 1, $max = 9) . '.jpg',
            'profile' => 'src/img/profile/face-' . $this->faker->numberBetween($min = 1, $max = 25) . '.jpg',
            'course_id' => '1',
            'course_id' => $this->faker->numberBetween($min = 1, $max = 2),
        ];
    }
}
