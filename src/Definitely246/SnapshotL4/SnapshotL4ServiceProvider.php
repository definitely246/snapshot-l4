<?php namespace Definitely246\SnapshotL4;

use Definitely246\Snapshot\Snapshot;
use Defintely246\Snapshot\PdfSnapshot;
use Illuminate\Support\ServiceProvider;

class SnapshotL4ServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('definitely246/snapshot-l4');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('snapshot-l4', function()
		{
			return new Snapshot(new PdfSnapshot);
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}