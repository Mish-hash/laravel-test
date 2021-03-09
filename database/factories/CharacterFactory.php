<?php

namespace Database\Factories;

use App\Models\Character;
use Illuminate\Database\Eloquent\Factories\Factory;

class CharacterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Character::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nb = rand(1, 5);
        $occupations = $this->faker->words($nb);

        $img = $this->faker->url . $this->faker->words(1, true) . '.png';

        return [
            'name' => $this->faker->name,
            'birthday' => $this->faker->dateTimeBetween('-65 years', '-18 years'),
            'occupations' => json_encode($occupations),
            'img' => $img,
            'nickname' => $this->faker->firstName,
            'portrayed' => $this->faker->name
        ];
    }
}
