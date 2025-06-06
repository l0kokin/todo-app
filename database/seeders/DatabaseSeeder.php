<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 */
	public function run(): void
	{
		$users = User::factory(10)->create([
			'password' => 'password',
		]);

		$users->each(function ($user) {
			Task::factory(60)->create([
				'user_id' => $user->id,
			]);
		});
	}
}
