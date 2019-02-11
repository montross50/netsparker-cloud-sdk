<?php
namespace Montross50\NetsparkerCloud;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    
    protected function getPackageProviders($app)
    {
        return [\Montross50\NetsparkerCloud\NetsparkerCloudServiceProvider::class];
    }

    protected function getProperty($object, $key)
    {
        $reflection = new \ReflectionProperty($object, $key);
        $reflection->setAccessible(true);
        return $reflection->getValue($object);
    }
}
