<?php

namespace Database\Factories;

use App\Models\Proofs;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProofsFactory extends Factory
{
    protected $model = Proofs::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'denunciation_id' => $this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]),
            'file_name' => $this->faker->randomElement([
                "uploads/NY3WJTcMQLNItzYWFDih2DuTZ2rCme0HPtEwE8jW.jpg",
                "uploads/NY3WJTcMQLNItzYWFDih2DuTZ2rCme0HPtEwE8jW.jpg",
                "uploads/U7SoFJOuoEmvuheCt6n6ePmXFMghqVpNqErkP4O8.jpg",
                "uploads/U7SoFJOuoEmvuheCt6n6ePmXFMghqVpNqErkP4O8.jpg",
                "uploads/y76GvWhnO7lpSkybm4NV3G98Dfe8Frj7deOod8sp.jpg",
                "uploads/y76GvWhnO7lpSkybm4NV3G98Dfe8Frj7deOod8sp.jpg",
                "uploads/bes4anNwOBZEYHcAo3RdW0YXayXyZZpgAtHU7YIX.png",
                "uploads/bes4anNwOBZEYHcAo3RdW0YXayXyZZpgAtHU7YIX.png",
                "uploads/T9CKOe7MtMGSGxoZQdSxPoamiwcFSkf3Tfsbag0h.jpg",
                "uploads/T9CKOe7MtMGSGxoZQdSxPoamiwcFSkf3Tfsbag0h.jpg",
                "uploads/watIX5Und2AmDqWXfTpbw2NDvhx7tQ4ZI1UGKpPu.jpg",
                "uploads/watIX5Und2AmDqWXfTpbw2NDvhx7tQ4ZI1UGKpPu.jpg",
                "uploads/b6tYK7TrSGrI6EWbAa3S3DqmUmuqkBpdr8w6KmGU.jpg",
                "uploads/b6tYK7TrSGrI6EWbAa3S3DqmUmuqkBpdr8w6KmGU.jpg",
                "uploads/Wjkj4eiX35z2BQI7azjvxkEC8niGuax2dEyqY2YJ.png",
                "uploads/Wjkj4eiX35z2BQI7azjvxkEC8niGuax2dEyqY2YJ.png",
                                        ]),
        ];
    }
}
