<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: account_group/v1/api.proto

namespace Accountgroup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * ListAllPotentialDuplicatesRequest allows listing potential duplicates by key (normalized phone or address) across
 * an entire partner or market.
 * </pre>
 *
 * Protobuf type <code>accountgroup.v1.ListAllPotentialDuplicatesRequest</code>
 */
class ListAllPotentialDuplicatesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string partner_id = 1;</code>
     */
    private $partner_id = '';
    /**
     * <code>string market_id = 2;</code>
     */
    private $market_id = '';

    public function __construct() {
        \GPBMetadata\AccountGroup\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <code>string partner_id = 1;</code>
     */
    public function getPartnerId()
    {
        return $this->partner_id;
    }

    /**
     * <code>string partner_id = 1;</code>
     */
    public function setPartnerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->partner_id = $var;
    }

    /**
     * <code>string market_id = 2;</code>
     */
    public function getMarketId()
    {
        return $this->market_id;
    }

    /**
     * <code>string market_id = 2;</code>
     */
    public function setMarketId($var)
    {
        GPBUtil::checkString($var, True);
        $this->market_id = $var;
    }

}

