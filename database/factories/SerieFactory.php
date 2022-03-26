<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Serie>
 */
class SerieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'title'=>$this->faker->sentence(5),
            'content'=>$this->faker->sentence(20),
            'acteur'=>$this->faker->name(),
            'url'=>$this->faker->imageUrl(),
            'tags'=>$this->faker->sentence(5),
            'status'=>$this->faker->sentence(1),
            'is_populair'=>$this->faker->boolean(),
            'number_of_view'=>$this->faker->randomDigit(),
            'trailler_url'=>"0pmfrE1YL4I"
        ];
    }
}
