<?php 
# Code generated by sdkgen
# Generated on 2019-10-01 20:26:16.0055947 +0000 UTC using container gcr.io/repcore-prod/sdkgen:latest
# DO NOT EDIT!

namespace Vendasta\AccountGroup\V1\internal;

use Vendasta\Vax\HTTPClient;

class AccountGroupServiceHTTPClient extends HTTPClient implements AccountGroupServiceClientInterface
{
    /**
     * AccountGroupServiceHTTPClient constructor.
     * @param string $host
     * @param string $scope
     * @param bool $secure
     * @param float $default_timeout
     */
    public function __construct(string $host, string $scope, bool $secure = true, float $default_timeout = 10000)
    {
        parent::__construct($host, $scope, $secure, $default_timeout);
    }
    
    /**
     * Auth wrapper for \AccountGroup\V1\AccountGroupServiceClient::GetMulti
     * @param \Accountgroup\V1\GetMultiRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Accountgroup\V1\GetMultiResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function GetMulti(\Accountgroup\V1\GetMultiRequest $req, array $options = []): \Accountgroup\V1\GetMultiResponse
    {
        return $this->doRequest(
            "/accountgroup.v1.AccountGroupService/GetMulti",
            $req,
            "\Accountgroup\V1\GetMultiResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \AccountGroup\V1\AccountGroupServiceClient::Lookup
     * @param \Accountgroup\V1\LookupRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Accountgroup\V1\PagedResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function Lookup(\Accountgroup\V1\LookupRequest $req, array $options = []): \Accountgroup\V1\PagedResponse
    {
        return $this->doRequest(
            "/accountgroup.v1.AccountGroupService/Lookup",
            $req,
            "\Accountgroup\V1\PagedResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \AccountGroup\V1\AccountGroupServiceClient::Create
     * @param \Accountgroup\V1\CreateAccountGroupRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Accountgroup\V1\CreateAccountGroupResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function Create(\Accountgroup\V1\CreateAccountGroupRequest $req, array $options = []): \Accountgroup\V1\CreateAccountGroupResponse
    {
        return $this->doRequest(
            "/accountgroup.v1.AccountGroupService/Create",
            $req,
            "\Accountgroup\V1\CreateAccountGroupResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \AccountGroup\V1\AccountGroupServiceClient::Delete
     * @param \Accountgroup\V1\DeleteAccountGroupRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function Delete(\Accountgroup\V1\DeleteAccountGroupRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->doRequest(
            "/accountgroup.v1.AccountGroupService/Delete",
            $req,
            "\Google\Protobuf\GPBEmpty",
            $options
        );
    }
    
    /**
     * Auth wrapper for \AccountGroup\V1\AccountGroupServiceClient::BulkUpdate
     * @param \Accountgroup\V1\BulkUpdateRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Google\Protobuf\GPBEmpty proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function BulkUpdate(\Accountgroup\V1\BulkUpdateRequest $req, array $options = []): \Google\Protobuf\GPBEmpty
    {
        return $this->doRequest(
            "/accountgroup.v1.AccountGroupService/BulkUpdate",
            $req,
            "\Google\Protobuf\GPBEmpty",
            $options
        );
    }
    
    /**
     * Auth wrapper for \AccountGroup\V1\AccountGroupServiceClient::List
     * @param \Accountgroup\V1\ListRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Accountgroup\V1\PagedResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function List(\Accountgroup\V1\ListRequest $req, array $options = []): \Accountgroup\V1\PagedResponse
    {
        return $this->doRequest(
            "/accountgroup.v1.AccountGroupService/List",
            $req,
            "\Accountgroup\V1\PagedResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \AccountGroup\V1\AccountGroupServiceClient::ListPotentialDuplicates
     * @param \Accountgroup\V1\ListPotentialDuplicatesRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Accountgroup\V1\ListPotentialDuplicatesResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ListPotentialDuplicates(\Accountgroup\V1\ListPotentialDuplicatesRequest $req, array $options = []): \Accountgroup\V1\ListPotentialDuplicatesResponse
    {
        return $this->doRequest(
            "/accountgroup.v1.AccountGroupService/ListPotentialDuplicates",
            $req,
            "\Accountgroup\V1\ListPotentialDuplicatesResponse",
            $options
        );
    }
    
    /**
     * Auth wrapper for \AccountGroup\V1\AccountGroupServiceClient::ListAllPotentialDuplicates
     * @param \Accountgroup\V1\ListAllPotentialDuplicatesRequest $req proto request message
     * @param array $options optional options, possible keys:
     *              \Vendasta\Vax\RequestOptions::*
     * @return \Accountgroup\V1\ListAllPotentialDuplicatesResponse proto response message
     * @throws \Vendasta\Vax\SDKException if this call encounters an error
     */
    public function ListAllPotentialDuplicates(\Accountgroup\V1\ListAllPotentialDuplicatesRequest $req, array $options = []): \Accountgroup\V1\ListAllPotentialDuplicatesResponse
    {
        return $this->doRequest(
            "/accountgroup.v1.AccountGroupService/ListAllPotentialDuplicates",
            $req,
            "\Accountgroup\V1\ListAllPotentialDuplicatesResponse",
            $options
        );
    }
    
}
