<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     * @throws \Exception
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(random_int(1, 3)),
            'content' => $this->faker->paragraph(random_int(1, 5)),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
