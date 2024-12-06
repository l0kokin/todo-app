<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateUser extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'user:create 
                            {name : The name of the user}
                            {email : The email of the user}
                            {password : The password of the user}';

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
		$name = $this->argument('name');
		$email = $this->argument('email');
		$password = Hash::make($this->argument('password'));

		$user = User::create([
			'name'     => $name,
			'email'    => $email,
			'password' => $password,
		]);

		$this->info("User {$user->name} created successfully with ID {$user->id}");
	}
}
