<?php namespace Valorin\ArtisanServe;

use Illuminate\Support\ServiceProvider;

class ServeServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerServeCommand();
    }

    /**
     * Registers the serve command
     *
     */
    protected function registerServeCommand()
    {
        $this->app->singleton('command.serve', function ($app) {
            return new ServeCommand();
        });

        $this->commands('command.serve');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'command.serve',
        ];
    }
}
