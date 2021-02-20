<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words($nb = 3, $asText = true),
            'tags' => $this->faker->words($nb = 5, $asText = true) ,
            'content' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'deadline' => $this->faker->date('Y-m-d'),
        ];
    }
}
