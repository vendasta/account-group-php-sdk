<?php

use Vendasta\AccountGroup\V1\AccountGroupLocation;
use Vendasta\AccountGroup\V1\AccountGroupServiceClient;
use PHPUnit\Framework\TestCase;
use Vendasta\AccountGroup\V1\CreateAccountGroupRequest;


class AccountGroupServiceClientTest extends TestCase
{
    public function testHelloWorld() {

        $environment = "DEMO";
        $client = new AccountGroupServiceClient($environment);

        $createReq = new CreateAccountGroupRequest();
        $location = new AccountGroupLocation();
        $location->setCompanyName("Corey's NYC Bagel & Deli");
        $location->setAddress("515 North Dearborn Street");
        $location->setCity("Chicago");
        $location->setState("IL");
        $location->setCountry("US");
        $location->setZip("60654");
        $workNumber = array("(312) 923-9999");
        $location->setWorkNumber($workNumber);

        $createReq->setAccountGroupNap($location);

        $createReq->setPartnerId("ABC");
        $resp = $client->Create($createReq);
       self::assertNotEmpty(
           $resp->getAccountGroupId(),
           'actual value does not equal expected value',
       );
   }
}
