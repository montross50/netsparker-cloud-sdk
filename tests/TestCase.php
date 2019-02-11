<?php
namespace Montross50\NetsparkerCloud;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    
    protected function getPackageProviders($app)
    {
        return [\Montross50\NetsparkerCloud\NetsparkerCloudServiceProvider::class];
    }
}
