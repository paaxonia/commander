<?php namespace Paaxonia\Commander\Framework\Laravel\Four;

use Illuminate\Support\ServiceProvider;

class CommanderServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'Paaxonia\Commander\CommandBus'
        ];
    }

    /**
     * Register the command bus.
     */
    public function register()
    {
        $this->app->bindShared('Paaxonia\Commander\CommandBus', function()
        {
            return $this->app->make('Paaxonia\Commander\DefaultCommandBus');
        });
    }

}