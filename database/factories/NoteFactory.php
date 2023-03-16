<?php

namespace Database\Factories;

use App\Models\Note;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Note::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'company' => $this->faker->company,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'date' => $this->faker->dateTimeBetween('1950-01-01', '2000-01-01')->format('d-m-Y'),
            'photo' => $this->faker->imageUrl()
        ];
    }
}
