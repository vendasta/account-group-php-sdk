<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: account_group/v1/api.proto

namespace Accountgroup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>accountgroup.v1.Snapshots.Snapshot</code>
 */
class Snapshots_Snapshot extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string snapshot_id = 1;</code>
     */
    private $snapshot_id = '';
    /**
     * <code>.google.protobuf.Timestamp created = 2;</code>
     */
    private $created = null;
    /**
     * <code>.google.protobuf.Timestamp expiry = 3;</code>
     */
    private $expiry = null;

    public function __construct() {
        \GPBMetadata\AccountGroup\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <code>string snapshot_id = 1;</code>
     */
    public function getSnapshotId()
    {
        return $this->snapshot_id;
    }

    /**
     * <code>string snapshot_id = 1;</code>
     */
    public function setSnapshotId($var)
    {
        GPBUtil::checkString($var, True);
        $this->snapshot_id = $var;
    }

    /**
     * <code>.google.protobuf.Timestamp created = 2;</code>
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * <code>.google.protobuf.Timestamp created = 2;</code>
     */
    public function setCreated(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->created = $var;
    }

    /**
     * <code>.google.protobuf.Timestamp expiry = 3;</code>
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     * <code>.google.protobuf.Timestamp expiry = 3;</code>
     */
    public function setExpiry(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expiry = $var;
    }

}

