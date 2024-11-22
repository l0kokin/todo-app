<?php

namespace Database\Factories;

use App\Models\User;
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
			'name_english'               => fake()->realText(30),
			'name_georgian'              => fake('ka_GE')->realText(30),
			'description_english'        => fake()->realText(220),
			'description_georgian'       => fake('ka_GE')->realText(220),
			'created_at'                 => fake()->date,
			'due_date'                   => fake()->date,
			'user_id'                    => User::factory(),
		];
	}
}
