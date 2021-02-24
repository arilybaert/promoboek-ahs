<?php

namespace Database\Factories;

use App\Models\Sub_course;
use Illuminate\Database\Eloquent\Factories\Factory;

class Sub_courseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sub_course::class;

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
        ];
    }
}
