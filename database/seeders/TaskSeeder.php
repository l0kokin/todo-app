<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$tags = User::factory(3)->create();
	}
}
