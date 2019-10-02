<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Accountgroup\V1;

/**
 * Account Group Service to retrieve account group information
 */
class AccountGroupServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Accountgroup\V1\GetMultiRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetMulti(\Accountgroup\V1\GetMultiRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accountgroup.v1.AccountGroupService/GetMulti',
        $argument,
        ['\Accountgroup\V1\GetMultiResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Accountgroup\V1\LookupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Lookup(\Accountgroup\V1\LookupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accountgroup.v1.AccountGroupService/Lookup',
        $argument,
        ['\Accountgroup\V1\PagedResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Accountgroup\V1\CreateAccountGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Create(\Accountgroup\V1\CreateAccountGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accountgroup.v1.AccountGroupService/Create',
        $argument,
        ['\Accountgroup\V1\CreateAccountGroupResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Accountgroup\V1\DeleteAccountGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function Delete(\Accountgroup\V1\DeleteAccountGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accountgroup.v1.AccountGroupService/Delete',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Accountgroup\V1\BulkUpdateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function BulkUpdate(\Accountgroup\V1\BulkUpdateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accountgroup.v1.AccountGroupService/BulkUpdate',
        $argument,
        ['\Google\Protobuf\Empty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Accountgroup\V1\ListRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function List(\Accountgroup\V1\ListRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accountgroup.v1.AccountGroupService/List',
        $argument,
        ['\Accountgroup\V1\PagedResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * ListPotentialDuplicates attempts to find similar account groups to either a) an existing account group, or b) the
     * location data for a new account group. The difference between this and a lookup/search is that a search is
     * optimized to return anything "like" the search term, whereas the results for this process are tailored specifically
     * to answer the question "does the given data/does the given account group likely already exist". For example: a
     * search would return a fuzzy match on company name regardless of geographic location, whereas a list potential 
     * duplicate would not.
     * 
     * The scope is either an entire partner, or a single market.
     *
     * Returns a list of account group IDs that are most likely a duplicate, along with a score of how strongly the
     * duplicate data matched.
     * @param \Accountgroup\V1\ListPotentialDuplicatesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListPotentialDuplicates(\Accountgroup\V1\ListPotentialDuplicatesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accountgroup.v1.AccountGroupService/ListPotentialDuplicates',
        $argument,
        ['\Accountgroup\V1\ListPotentialDuplicatesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * ListAllPotentialDuplicates attempts to find all of the account groups in a partner or single market that are a
     *  potential duplicate.
     * 
     * This endpoint currently cannot be paged since it relies on elasticsearch aggregations.
     *
     * Returns a list of keys (either normalized phone number, or normalized address) along with the account group IDs
     * that all share that same key. For a key to be returned, it needs to have at least 2 account group IDs in it.
     * @param \Accountgroup\V1\ListAllPotentialDuplicatesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListAllPotentialDuplicates(\Accountgroup\V1\ListAllPotentialDuplicatesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/accountgroup.v1.AccountGroupService/ListAllPotentialDuplicates',
        $argument,
        ['\Accountgroup\V1\ListAllPotentialDuplicatesResponse', 'decode'],
        $metadata, $options);
    }

}
