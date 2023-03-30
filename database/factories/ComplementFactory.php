<?php

namespace Database\Factories;

use App\Models\Complement;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Complement>
 */
class ComplementFactory extends Factory
{
    protected $model = Complement::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'denunciation_id' => $this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
            'type' => $this->faker->randomElement(['Abus de pouvoir', 'Arrestation arbitraire', 'Torture']),
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(),
        ];
    }
}
