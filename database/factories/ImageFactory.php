<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->state,
            'content' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'thumbnail' => 0,
            'url' => '',
            'tags' => $this->faker->words($nb = 3, $asText = true),
        ];
    }
}
