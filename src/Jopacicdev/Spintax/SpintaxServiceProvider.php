<?php namespace Jopacicdev\Spintax;

use Illuminate\Support\ServiceProvider;

class SpintaxServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

    /**
     * Boot the package
     */
    public function boot()
    {
        $this->package('jopacicdev/spintax');
    }

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['spintax'] = $this->app->share(function($app)
        {
            return new \Jopacicdev\Spintax\Spintax;
        });

        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Spintax', 'Jopacicdev\Spintax\Facades\Spintax');
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('Spintax');
	}

}
