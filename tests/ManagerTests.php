<?php
namespace Montross50\NetsparkerCloud;

class ManagerTests extends TestCase
{
    
    public function testApiKeyInsertion()
    {
        /**
         * @var $api NetsparkerCloudInterface
         */
        $api = app(NetsparkerCloudInterface::class);
        $me = $api->accountMe();
    }

}
