<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CreateUser extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'user:create';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'This command creates a user';

	/**
	 * Execute the console command.
	 */
	public function handle()
	{
		$name = $this->ask("What is the user's name?");
		$email = $this->ask("What is the user's email?");
		$password = $this->secret("What is the user's password?");

		$validator = Validator::make(
			[
				'name'     => $name,
				'email'    => $email,
				'password' => $password,
			],
			[
				'name'     => ['required', 'string', 'max:255'],
				'email'    => ['required', 'email', 'unique:users,email'],
				'password' => ['required', 'min:4'],
			]
		);

		if ($validator->fails()) {
			$this->error('Validation failed:');
			foreach ($validator->errors()->all() as $error) {
				$this->error("- $error");
			}
			return;
		}

		$user = User::create([
			'name'     => $name,
			'email'    => $email,
			'password' => Hash::make($password),
		]);

		$this->info("User {$user->name} created successfully with ID {$user->id}");
	}
}
