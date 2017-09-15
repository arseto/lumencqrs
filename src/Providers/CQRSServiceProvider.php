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
            'Arseto\\LumenCQRS\\Application\\Inflector',
            'Arseto\\LumenCQRS\\Application\\NameInflector'
        );

        $this->app->singleton(
            'Arseto\\LumenCQRS\\Contracts\\Application\\Container',
            'Arseto\\LumenCQRS\\Application\\LaravelContainer'
        );
    }
}

