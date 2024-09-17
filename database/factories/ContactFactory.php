<?php

namespace Database\Factories;

use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'birthdate' => $this->faker->date(),
            'genre' => $this->faker->randomElement(['f', 'm']),
            'note' => $this->faker->optional()->paragraph(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}

