<?php
/**
 * @author Arseto Nugroho <satriyo.796@gmail.com>.
 */
namespace Arseto\LumenCQRS\Providers;

use Illuminate\Support\ServiceProvider;

class CQRSServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->app->singleton(
            'Arseto\\LumenCQRS\\Contracts\\Inflector',
            'Arseto\\LumenCQRS\\NameInflector'
        );

        $this->app->singleton(
            'Arseto\\LumenCQRS\\Contracts\\Container',
            'Arseto\\LumenCQRS\\LaravelContainer'
        );
    }
}

