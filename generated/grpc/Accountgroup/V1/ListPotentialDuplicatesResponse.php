<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: account_group/v1/api.proto

namespace Accountgroup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * ListPotentialDuplicatesResponse is the list of account groups that are likely to be a duplicate of the provided 
 * account group or location data.
 * </pre>
 *
 * Protobuf type <code>accountgroup.v1.ListPotentialDuplicatesResponse</code>
 */
class ListPotentialDuplicatesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated .accountgroup.v1.ListPotentialDuplicatesResponse.PotentialDuplicate potential_duplicates = 1;</code>
     */
    private $potential_duplicates;
    /**
     * <code>string next_cursor = 2;</code>
     */
    private $next_cursor = '';
    /**
     * <code>bool has_more = 3;</code>
     */
    private $has_more = false;
    /**
     * <code>int64 total_results = 4;</code>
     */
    private $total_results = 0;

    public function __construct() {
        \GPBMetadata\AccountGroup\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated .accountgroup.v1.ListPotentialDuplicatesResponse.PotentialDuplicate potential_duplicates = 1;</code>
     */
    public function getPotentialDuplicates()
    {
        return $this->potential_duplicates;
    }

    /**
     * <code>repeated .accountgroup.v1.ListPotentialDuplicatesResponse.PotentialDuplicate potential_duplicates = 1;</code>
     */
    public function setPotentialDuplicates(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Accountgroup\V1\ListPotentialDuplicatesResponse_PotentialDuplicate::class);
        $this->potential_duplicates = $arr;
    }

    /**
     * <code>string next_cursor = 2;</code>
     */
    public function getNextCursor()
    {
        return $this->next_cursor;
    }

    /**
     * <code>string next_cursor = 2;</code>
     */
    public function setNextCursor($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_cursor = $var;
    }

    /**
     * <code>bool has_more = 3;</code>
     */
    public function getHasMore()
    {
        return $this->has_more;
    }

    /**
     * <code>bool has_more = 3;</code>
     */
    public function setHasMore($var)
    {
        GPBUtil::checkBool($var);
        $this->has_more = $var;
    }

    /**
     * <code>int64 total_results = 4;</code>
     */
    public function getTotalResults()
    {
        return $this->total_results;
    }

    /**
     * <code>int64 total_results = 4;</code>
     */
    public function setTotalResults($var)
    {
        GPBUtil::checkInt64($var);
        $this->total_results = $var;
    }

}

