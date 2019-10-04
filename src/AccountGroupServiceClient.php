<?php 
namespace Vendasta\AccountGroup\V1;

use Accountgroup\V1\CreateAccountGroupResponse;
use Vendasta\AccountGroup\V1\internal\AccountGroupServiceGeneratedClient;

class AccountGroupServiceClient
{
    /**
     * AccountGroupServiceClient constructor.
     * @param string $env one of \Vendasta\Vax\Environment::<Env>
     * @param float $default_timeout
     */
    private $client;

    public function __construct(string $env, float $default_timeout = 10000)
    {
        $this->client = new AccountGroupServiceGeneratedClient($env, $default_timeout);
    }

    public function Create(CreateAccountGroupRequest $req): CreateAccountGroupResponse
    {
        $createRequest = new \Accountgroup\V1\CreateAccountGroupRequest();
        $accountGroupNap = new \Accountgroup\V1\AccountGroupLocation();

        $reqNap = $req->getAccountGroupNap();
        $accountGroupNap->setCompanyName($reqNap->getCompanyName());
        $accountGroupNap->setAddress($reqNap->getAddress());
        $accountGroupNap->setAddress2($reqNap->getAddress2());
        $accountGroupNap->setCity($reqNap->getCity());
        $accountGroupNap->setState($reqNap->getState());
        $accountGroupNap->setZip($reqNap->getZip());
        $accountGroupNap->setCountry($reqNap->getCountry());
        $accountGroupNap->setWebsite($reqNap->getWebsite());
        $workNumber = $reqNap->getWorkNumber();
        $accountGroupNap->setWorkNumber($workNumber);
        $callTrackingNumber = $reqNap->getCallTrackingNumber();
        $accountGroupNap->setCallTrackingNumber($callTrackingNumber);
        $location = $reqNap->getLocation();
        $accountGroupNap->setLocation($location);
        $accountGroupNap->setTimezone($reqNap->getTimezone());
        $accountGroupNap->setServiceAreaBusiness($reqNap->getServiceAreaBusiness());

        $createRequest->setAccountGroupNap($accountGroupNap);
        $updateOperations = $req->getUpdateOperations();
        $createRequest->setUpdateOperations($updateOperations);
        return $this->client->Create($createRequest);
    }
}


