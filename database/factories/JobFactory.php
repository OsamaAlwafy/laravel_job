<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            
            
            'company_id' => random_int(1,10),
            'is_complete' => random_int(0,1), // password
            'is_active' => random_int(0,1),
            'updated_at' => now(),
            'created_at'=>now()
        ];
    }
}
