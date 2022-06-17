<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Job_DetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Job_title' => $this->faker->name(),
            
            
            'salary' => random_int(1000,2220),
            'branch' => "Taiz" ,// password
            'descripe'=>"descrips",
            'skill'=>"java,python",
            "time_type"=>"جزي",
            'W_responsible'=>"W_responsible",
            'duration_experience'=>random_int(1,5),
            'why_w_us'=>"why_w_us",
            "job_id"=>random_int(1,10),
            'updated_at' => now(),
            'created_at'=>now()
            
        ];
    }
}
