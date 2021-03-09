<?php

namespace Database\Factories;

use App\Models\Character;
use App\Models\Episode;
use App\Models\Quote;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Quote::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sentencesNb = rand(1, 3);
        $quote = $this->faker->sentences($sentencesNb, true);

        $characterIdArr = Character::all(['id'])->pluck('id')->toArray();
        $character_id = $this->faker->randomElement($characterIdArr);

        $episodeIdArr = Episode::all('id')->pluck('id')->toArray();
        $episode_id = $this->faker->randomElement($episodeIdArr);

        return [
            'quote' => $quote,
            'character_id' => $character_id,
            'episode_id' => $episode_id,
        ];
    }
}
