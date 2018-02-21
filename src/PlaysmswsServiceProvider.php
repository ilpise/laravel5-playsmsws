<?php

namespace kataklys\Playsmsws;

use Illuminate\Support\ServiceProvider;

class PlaysmswsServiceProvider extends ServiceProvider
{

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	public function boot()
	{
		$this->package('kataklys/playsmsws');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('playsmsws', function ($app) {
			return new Playsmsws(\Config::get('playsmsws::config'));
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('playsmsws');
	}

}
