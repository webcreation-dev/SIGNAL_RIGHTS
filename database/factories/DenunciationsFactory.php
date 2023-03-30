<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Denunciations;
use App\Models\Proofs;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Denunciations>
 */
class DenunciationsFactory extends Factory
{
    protected $model = Denunciations::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        // Créer un utilisateur
        $user = User::create([
            'secret_code' => rand(10000, 99999),
            'generate_code' => rand(10000, 99999),
            'role' => 'user'
        ]);

        return [
            'secret_code' => $user->secret_code,
            'user_id' => $user->id,
            'title' => $this->faker->sentence(),
            'type' => $this->faker->randomElement(['Abus de pouvoir', 'Arrestation arbitraire', 'Torture']),
            'place' => $this->faker->address(),
            'date' => $this->faker->dateTimeBetween('-1 month', 'now'),
            'description' => $this->faker->paragraph(),
            'file_name' => 'file',
            'status' => $this->faker->randomElement(['sent', 'viewed']),
            'level' => $this->faker->randomElement(['important', 'not-important', 'very-important']),
            'notif_status' => 'none',
            'place_personal' => $this->faker->boolean(),
            'email' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'accord' => "non",
            'person_type' => $this->faker->randomElement(['Victime', 'Temoin']),
            'sexe' => $this->faker->randomElement(['Masculin', 'Féminin', 'Autres']),
        ];
    }
}
