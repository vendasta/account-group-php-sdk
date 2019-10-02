<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: account_group/v1/api.proto

namespace Accountgroup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>accountgroup.v1.HoursOfOperation.Span</code>
 */
class HoursOfOperation_Span extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>repeated string day_of_week = 1;</code>
     */
    private $day_of_week;
    /**
     * <code>string opens = 2;</code>
     */
    private $opens = '';
    /**
     * <code>string closes = 3;</code>
     */
    private $closes = '';
    /**
     * <code>string description = 4;</code>
     */
    private $description = '';

    public function __construct() {
        \GPBMetadata\AccountGroup\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <code>repeated string day_of_week = 1;</code>
     */
    public function getDayOfWeek()
    {
        return $this->day_of_week;
    }

    /**
     * <code>repeated string day_of_week = 1;</code>
     */
    public function setDayOfWeek(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->day_of_week = $arr;
    }

    /**
     * <code>string opens = 2;</code>
     */
    public function getOpens()
    {
        return $this->opens;
    }

    /**
     * <code>string opens = 2;</code>
     */
    public function setOpens($var)
    {
        GPBUtil::checkString($var, True);
        $this->opens = $var;
    }

    /**
     * <code>string closes = 3;</code>
     */
    public function getCloses()
    {
        return $this->closes;
    }

    /**
     * <code>string closes = 3;</code>
     */
    public function setCloses($var)
    {
        GPBUtil::checkString($var, True);
        $this->closes = $var;
    }

    /**
     * <code>string description = 4;</code>
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * <code>string description = 4;</code>
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;
    }

}

