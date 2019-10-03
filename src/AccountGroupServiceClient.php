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
        $createRequest->setAccountGroupNap($req->getAccountGroupNap());
        return $this->client->Create($createRequest);
    }
}


