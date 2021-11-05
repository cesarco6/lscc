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
            'email' =>  $this->faker->unique()->email,
            'city'  =>  $this->faker->city,
            'typeofprod'    =>  $this->faker->randomElement($array = array ('TERAPEUTICO','DENTAL','VETERINARIO','BEAUTY','SPORT')), 
            'seller_id' =>  $this->faker->biasedNumberBetween(1, 6),
            'review'    =>  $this->faker->text(),
            'regis_at'  =>  $this->faker->dateTimeBetween('-26 week', '1 week'),
            'address'   =>  $this->faker->streetAddress,
            'cp'        =>  $this->faker->postcode, 
            'status'    =>  $this->faker->randomElement($array = array ('ACTIVO','INACTIVO','CERRADO')), 
        ];
    }
}
