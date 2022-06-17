<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name_com' => $this->faker->name(),
            
            
            'logo' => "company.png",
            'location' => 'Gmal Street', // password
            "city"=>"Taiz",
            "type"=>"engnerr",
            "url"=>"company.com",
            "phone"=>"700005552",
            "email"=>"company.com",
            "country"=>"Yemen",
            'updated_at' => now(),
            'created_at'=>now()
        ];
    }
}
