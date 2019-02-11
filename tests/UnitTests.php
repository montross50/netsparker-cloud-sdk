<?php
namespace Montross50\NetsparkerCloud;

use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Client\HttpClient;
use Http\Message\Authentication\BasicAuth;
use Psr\Http\Message\UriInterface;

class UnitTests extends TestCase
{

    public function testApiClientRespectsConfig()
    {
        config(['netsparker.url'=>'https://foobar.com','netsparker.username'=>'foo','netsparker.password'=>'bar']);
        /**
         * @var $api NetsparkerCloudInterface
         */
        $api = app(NetsparkerCloudInterface::class);
        /**
         * @var $httpClient HttpClient
         */
        $httpClient = $this->getProperty($api, 'httpClient');
        $this->assertInstanceOf(HttpClient::class, $httpClient);
        $plugins = $this->getProperty($httpClient, 'plugins');
        $this->assertIsArray($plugins);
        $addHost = $plugins[0];
        $addAuth = $plugins[1];
        $this->assertInstanceOf(AddHostPlugin::class, $addHost);
        $this->assertInstanceOf(AuthenticationPlugin::class, $addAuth);
        $host = $this->getProperty($addHost, 'host');
        $authentication = $this->getProperty($addAuth,'authentication');
        $username = $this->getProperty($authentication, 'username');
        $password = $this->getProperty($authentication, 'password');
        $this->assertInstanceOf(UriInterface::class, $host);
        $this->assertEquals('foobar.com', $host->getHost());
        $this->assertEquals('foo', $username);
        $this->assertEquals('bar', $password);
    }
}
