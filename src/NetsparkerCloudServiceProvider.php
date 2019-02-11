<?php

namespace Montross50\NetsparkerCloud;

use Illuminate\Support\ServiceProvider;
use Montross50\NetsparkerCloud\SDK\Client;
use Montross50\NetsparkerCloud\SDK\Model\BasicAuthenticationSettingModel;

class NetsparkerCloudServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/netsparker.php' => config_path('netsparker.php'),
        ]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/netsparker.php',
            'netsparker'
        );
        $this->app->bind(NetsparkerCloudInterface::class, function ($app) {
            $api = $app->make(Client::class);
            return $api;
        });
        $this->app->bind(Client::class, function ($app) {

            $httpClient = \Http\Discovery\HttpClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\UriFactoryDiscovery::find()->createUri(config('netsparker.url','https://www.netsparkercloud.com'));
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $auth = new \Http\Message\Authentication\BasicAuth(config('netsparker.username'),config('netsparker.password'));
            $plugins[] = new \Http\Client\Common\Plugin\AuthenticationPlugin($auth);
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
            return Client::create($httpClient);
        });
    }
}
