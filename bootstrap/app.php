<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
	->withRouting(
		web: __DIR__ . '/../routes/web.php',
		commands: __DIR__ . '/../routes/console.php',
		health: '/up',
	)
	->withMiddleware(function (Middleware $middleware) {
		$middleware->web(append: [
			\App\Http\Middleware\SetLocale::class,
		]);
		$middleware->redirectGuestsTo(fn (Request $request) => route('home'));
	})
	->withExceptions(function (Exceptions $exceptions) {
	})->create();
