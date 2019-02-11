<?php
namespace Montross50\NetsparkerCloud;

use Montross50\NetsparkerCloud\SDK\Model\UserHealthCheckApiModel;
use Montross50\NetsparkerCloud\SDK\Model\VulnerabilityModel;

class IntegrationTests extends TestCase
{
    
    public function testUserAccountPull()
    {
        /**
         * @var $api NetsparkerCloudInterface
         */
        $api = app(NetsparkerCloudInterface::class);
        $me = $api->accountMe();
        $this->assertInstanceOf(UserHealthCheckApiModel::class, $me);
        $this->assertEquals(env('INTEGRATION_TEST_USER_EMAIL'), $me->getEmail());
    }

    public function testGetScanResultReturnsNullOnInvalidScanID()
    {
        /**
         * @var $api NetsparkerCloudInterface
         */
        $api = app(NetsparkerCloudInterface::class);
        $result = $api->scansResult('foobar');
        $this->assertNull($result);
    }

    public function testGetScanResult()
    {
        /**
         * @var $api NetsparkerCloudInterface
         */
        $api = app(NetsparkerCloudInterface::class);
        $result = $api->scansResult(env('INTEGRATION_TEST_SCAN_ID'));
        $this->assertIsArray($result);
        $this->assertInstanceOf(VulnerabilityModel::class, $result[0]);
        $this->assertObjectHasAttribute('title', $result[0]);
    }
}
