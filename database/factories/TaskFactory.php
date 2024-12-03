<?php

namespace Database\Factories;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array
	{
		return [
			'name' => [
				'en' => fake()->realText(30),
				'ka' => fake('ka_GE')->realText(30),
			],

			'description' => [
				'en' => fake()->realText(220),
				'ka' => fake('ka_GE')->realText(220),
			],

			'user_id'    => User::factory(),
			'created_at' => fake()->date,
			'due_date'   => $this->faker->boolean(70)
				? Carbon::now()->addDays($this->faker->numberBetween(1, 30))
				: Carbon::now()->subDays($this->faker->numberBetween(1, 30)),
		];
	}
}
