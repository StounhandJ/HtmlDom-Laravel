<?php 
namespace StounhandJ\HtmldomLaravel;

use Illuminate\Support\ServiceProvider;

class HtmldomServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{

	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('htmldom', function()
		{
			return new Htmldom;
		});
	}

}
