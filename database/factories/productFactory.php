<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\product>
 */
class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'productName'=> $this->faker->text,
            'price'=> $this->faker->randomDigit(),
            'description'=> $this->faker->text,
            'category_id'=> $this->faker->randomElement([
                1,2,3,4,5
            ]),
            'image' => 'dummy.png',

        ];
    }
}
