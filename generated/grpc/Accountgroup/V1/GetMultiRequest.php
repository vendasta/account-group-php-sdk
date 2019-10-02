<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: account_group/v1/api.proto

namespace Accountgroup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>accountgroup.v1.GetMultiRequest</code>
 */
class GetMultiRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated string account_group_ids = 1;</code>
     */
    private $account_group_ids;
    /**
     * <code>.accountgroup.v1.ProjectionFilter projection_filter = 2;</code>
     */
    private $projection_filter = null;
    /**
     * <code>.accountgroup.v1.ReadFilter read_filter = 3;</code>
     */
    private $read_filter = null;

    public function __construct() {
        \GPBMetadata\AccountGroup\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated string account_group_ids = 1;</code>
     */
    public function getAccountGroupIds()
    {
        return $this->account_group_ids;
    }

    /**
     * <code>repeated string account_group_ids = 1;</code>
     */
    public function setAccountGroupIds(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->account_group_ids = $arr;
    }

    /**
     * <code>.accountgroup.v1.ProjectionFilter projection_filter = 2;</code>
     */
    public function getProjectionFilter()
    {
        return $this->projection_filter;
    }

    /**
     * <code>.accountgroup.v1.ProjectionFilter projection_filter = 2;</code>
     */
    public function setProjectionFilter(&$var)
    {
        GPBUtil::checkMessage($var, \Accountgroup\V1\ProjectionFilter::class);
        $this->projection_filter = $var;
    }

    /**
     * <code>.accountgroup.v1.ReadFilter read_filter = 3;</code>
     */
    public function getReadFilter()
    {
        return $this->read_filter;
    }

    /**
     * <code>.accountgroup.v1.ReadFilter read_filter = 3;</code>
     */
    public function setReadFilter(&$var)
    {
        GPBUtil::checkMessage($var, \Accountgroup\V1\ReadFilter::class);
        $this->read_filter = $var;
    }

}

