<?php

use Vendasta\AccountGroup\V1\AccountGroupLocation;
use Vendasta\AccountGroup\V1\AccountGroupServiceClient;
use PHPUnit\Framework\TestCase;
use Vendasta\AccountGroup\V1\CreateAccountGroupRequest;


class AccountGroupServiceClientTest extends TestCase
{
    public function testCreateHappyPath()
    {
        $environment = getenv("PRODUCTION_ENVIRONMENT");
        if ($environment == null) {
            $environment = "DEMO";
        }

        $client = new AccountGroupServiceClient($environment);

        $createReq = new CreateAccountGroupRequest();
        $location = new AccountGroupLocation();
        $location->setCompanyName("Test Company");
        $location->setAddress("123 Street Name");
        $location->setCity("Chicago");
        $location->setState("IL");
        $location->setCountry("US");
        $location->setZip("88888");
        $workNumber = array("(999) 999-9999");
        $location->setWorkNumber($workNumber);
        $createReq->setAccountGroupNap($location);
        $createReq->setPartnerId("PID");

        $resp = $client->Create($createReq);
        self::assertNotEmpty(
            $resp->getAccountGroupId(),
            'expected account group ID returned',
        );
    }
}