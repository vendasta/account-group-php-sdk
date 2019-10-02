<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: account_group/v1/api.proto

namespace Accountgroup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * A representation of a single account on an Account Group
 * </pre>
 *
 * Protobuf type <code>accountgroup.v1.Account</code>
 */
class Account extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * Whether the account is a trial account or not
     * </pre>
     *
     * <code>bool is_trial = 1;</code>
     */
    private $is_trial = false;
    /**
     * <pre>
     * Tags on the account
     * </pre>
     *
     * <code>repeated string tags = 2;</code>
     */
    private $tags;
    /**
     * <pre>
     * The marketplace app id or the legacy product id the account belongs to
     * </pre>
     *
     * <code>string marketplace_app_id = 3;</code>
     */
    private $marketplace_app_id = '';
    /**
     * <pre>
     * Account ID of this account
     * </pre>
     *
     * <code>string account_id = 4;</code>
     */
    private $account_id = '';
    /**
     * <pre>
     * The date on which the account expires
     * </pre>
     *
     * <code>.google.protobuf.Timestamp expiry = 5;</code>
     */
    private $expiry = null;
    /**
     * <pre>
     * The id of the edition associated with the marketplace_app_id that was activated on the account group. 
     * </pre>
     *
     * <code>string edition_id = 6;</code>
     */
    private $edition_id = '';

    public function __construct() {
        \GPBMetadata\AccountGroup\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * Whether the account is a trial account or not
     * </pre>
     *
     * <code>bool is_trial = 1;</code>
     */
    public function getIsTrial()
    {
        return $this->is_trial;
    }

    /**
     * <pre>
     * Whether the account is a trial account or not
     * </pre>
     *
     * <code>bool is_trial = 1;</code>
     */
    public function setIsTrial($var)
    {
        GPBUtil::checkBool($var);
        $this->is_trial = $var;
    }

    /**
     * <pre>
     * Tags on the account
     * </pre>
     *
     * <code>repeated string tags = 2;</code>
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * <pre>
     * Tags on the account
     * </pre>
     *
     * <code>repeated string tags = 2;</code>
     */
    public function setTags(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tags = $arr;
    }

    /**
     * <pre>
     * The marketplace app id or the legacy product id the account belongs to
     * </pre>
     *
     * <code>string marketplace_app_id = 3;</code>
     */
    public function getMarketplaceAppId()
    {
        return $this->marketplace_app_id;
    }

    /**
     * <pre>
     * The marketplace app id or the legacy product id the account belongs to
     * </pre>
     *
     * <code>string marketplace_app_id = 3;</code>
     */
    public function setMarketplaceAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->marketplace_app_id = $var;
    }

    /**
     * <pre>
     * Account ID of this account
     * </pre>
     *
     * <code>string account_id = 4;</code>
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     * <pre>
     * Account ID of this account
     * </pre>
     *
     * <code>string account_id = 4;</code>
     */
    public function setAccountId($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_id = $var;
    }

    /**
     * <pre>
     * The date on which the account expires
     * </pre>
     *
     * <code>.google.protobuf.Timestamp expiry = 5;</code>
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     * <pre>
     * The date on which the account expires
     * </pre>
     *
     * <code>.google.protobuf.Timestamp expiry = 5;</code>
     */
    public function setExpiry(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expiry = $var;
    }

    /**
     * <pre>
     * The id of the edition associated with the marketplace_app_id that was activated on the account group. 
     * </pre>
     *
     * <code>string edition_id = 6;</code>
     */
    public function getEditionId()
    {
        return $this->edition_id;
    }

    /**
     * <pre>
     * The id of the edition associated with the marketplace_app_id that was activated on the account group. 
     * </pre>
     *
     * <code>string edition_id = 6;</code>
     */
    public function setEditionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->edition_id = $var;
    }

}

