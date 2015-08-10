<?php namespace Lartificer\Contactform;

use Illuminate\Support\ServiceProvider;

class ContactformServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	public function boot() {
        
        // Include the translations
        $this->loadTranslationsFrom(__DIR__ . '/../../lang', 'contactform');
        
        // Include the views
        $this->loadViewsFrom(__DIR__ . '/../../views', 'contactform');
        
        // Include the routes
		include __DIR__ . '/../../routes.php';
	}
	
	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [];
	}

}
