<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
/**
* The name of the factory's corresponding model.
*
* @var string
*/
protected $model = Contact::class;
/**
* Define the model's default state.
*
* @return array
*/
public function definition()
{

return [
            'fullname' => $this->faker->name,
            'email' =>   $this->faker->email() ,
            'gender' =>  $this->faker->randomElement(['0','1']),
            'postcode'=> $this->faker->regexify('[1-9]{3}-[0-9]{4}'),
            'address' => $this->faker->address(),
            'building_name' => $this->faker->company,
            'opinion' => $this->faker->text(120) ,
];
}
}