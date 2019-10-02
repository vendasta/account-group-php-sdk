<?php
namespace Vendasta\AccountGroup\V1;
class Config
{
    const ENVIRONMENT_PARAMS = [
        "PROD" => [
            'host' => 'account-group-api-prod.apigateway.co:443',
            'scope' => 'https://account-group-api-prod.apigateway.co',
            'url' => 'https://account-group-api-prod.apigateway.co',
            'secure' => true,
        ],
        "DEMO" => [
            'host' => 'account-group-api-demo.apigateway.co:443',
            'scope' => 'https://account-group-api-demo.apigateway.co',
            'url' => 'https://account-group-api-demo.apigateway.co',
            'secure' => true,
        ]
    ];
}