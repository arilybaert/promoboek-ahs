<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Video::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'title' => $this->faker->state,
            'url' => 'src/video/portfolio/avd-1.mp4',
            'thumbnail_image' => '/src/img/thumbnails/thumb-1.jpg',
            'thumbnail' => false,
        ];
    }
}
