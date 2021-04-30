<?php

namespace Database\Factories;

use App\Models\Influenceur;
use Illuminate\Database\Eloquent\Factories\Factory;

class InfluenceurFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Influenceur::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'speciality' => $this->faker->jobTitle(),
            'status'  => $this->faker->randomElement($array = array ('active','not active')),
            'score' => $this->faker->numberBetween($min = 0, $max = 100),
            
        ];
    }
}
