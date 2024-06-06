<?php

namespace NotificationChannels\ClickSend;

use Illuminate\Support\ServiceProvider;

class ClickSendServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/clicksend.php', 'clicksend-notification-channel');

        $this->publishes([
            __DIR__.'/../config/clicksend-notification-channel.php' => config_path('clicksend-notification-channel.php')
        ]);

        $this->app->bind(ClickSendConfig::class, function() {
            return new ClickSendConfig($this->app['config']['clicksend-notification-channel']);
        });

        $this->app->singleton(ClickSendService::class, function($app) {
            $config = $app->make(ClickSendConfig::class);
            return new ClickSendService($config);
        });
    }
}
