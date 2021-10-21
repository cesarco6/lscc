<?php

namespace Database\Factories;

use App\Models\Prospect;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProspectsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Prospect::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'  =>  $this->faker->name,
            'phone' =>  $this->faker->phoneNumber,
            'movil' =>  $this->faker->phoneNumber,            
            'email' =>  $this->faker->unique()->safeEmail,
            'city'  =>  $this->faker->city,
            'typeofprod'    =>  "QUANTUM IR810",
            'seller_id' =>  $this->faker->biasedNumberBetween(1, 7),
            'review'    =>  $this->faker->text(),
            'regis_at'  =>  $this->faker->dateTimeBetween('-27 week', '-1 week')    
            
        ];
    }
}
