<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
	/**
	 * The application's global HTTP middleware stack.
	 *
	 * @var array
	 */
	protected $middleware = [
		// \App\Http\Middleware\TrustProxies::class,
		// \Fruitcake\Cors\HandleCors::class,
		// \App\Http\Middleware\PreventRequestsDuringMaintenance::class,
		\Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
		\Illuminate\Foundation\Http\Middleware\TrimStrings::class,
		\Illuminate\Routing\Middleware\SubstituteBindings::class,
	];

	/**
	 * The application's route middleware.
	 *
	 * @var array
	 */
	protected $routeMiddleware = [
		// 'auth' => \App\Http\Middleware\Authenticate::class,
		'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
		'bindings' => \Illuminate\Routing\Middleware\SubstituteBindings::class,
		'can' => \Illuminate\Auth\Middleware\Authorize::class,
		// 'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
		'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
		// Добавьте свои middleware здесь
	];

	/**
	 * The application's middleware groups.
	 *
	 * @var array
	 */
	protected $middlewareGroups = [
		'web' => [
			// \App\Http\Middleware\EncryptCookies::class,
			\Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
			\Illuminate\Session\Middleware\StartSession::class,
			\Illuminate\View\Middleware\ShareErrorsFromSession::class,
			\App\Http\Middleware\VerifyCsrfToken::class,
			\Illuminate\Routing\Middleware\SubstituteBindings::class,
		],

		'api' => [
			'throttle:api',
			\Illuminate\Routing\Middleware\SubstituteBindings::class,
		],
	];
}
