<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => '',
            'title_short' => '',
            'content' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'img_url' => '',
        ];
    }
}
