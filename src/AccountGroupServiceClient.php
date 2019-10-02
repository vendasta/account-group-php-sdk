<?php 
namespace Vendasta\AccountGroup\V1;

use Vendasta\AccountGroup\V1\internal\AccountGroupServiceGeneratedClient;

class AccountGroupServiceClient extends AccountGroupServiceGeneratedClient
{
    /**
     * AccountGroupServiceClient constructor.
     * @param string $env one of \Vendasta\Vax\Environment::<Env>
     * @param float $default_timeout
     */
    public function __construct(string $env, float $default_timeout = 10000)
    {
        parent::__construct($env, $default_timeout);
    }
}
