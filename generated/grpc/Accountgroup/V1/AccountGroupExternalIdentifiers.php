<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: account_group/v1/api.proto

namespace Accountgroup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>accountgroup.v1.AccountGroupExternalIdentifiers</code>
 */
class AccountGroupExternalIdentifiers extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string origin = 1;</code>
     */
    private $origin = '';
    /**
     * <code>repeated string job_id = 2;</code>
     */
    private $job_id;
    /**
     * <code>string customer_identifier = 3;</code>
     */
    private $customer_identifier = '';
    /**
     * <code>repeated string tags = 5;</code>
     */
    private $tags;
    /**
     * <code>repeated string action_lists = 6;</code>
     */
    private $action_lists;
    /**
     * <code>string social_profile_id = 7;</code>
     */
    private $social_profile_id = '';
    /**
     * <code>string partner_id = 8;</code>
     */
    private $partner_id = '';
    /**
     * <code>string market_id = 9;</code>
     */
    private $market_id = '';
    /**
     * <code>repeated string tax_ids = 10;</code>
     */
    private $tax_ids;
    /**
     * <pre>
     * Primary salesperson id
     * </pre>
     *
     * <code>string sales_person_id = 11;</code>
     */
    private $sales_person_id = '';
    /**
     * <pre>
     * Additional salesperson ids assigned to an account group which is not the primary salesperson id
     * </pre>
     *
     * <code>repeated string additional_sales_person_ids = 12;</code>
     */
    private $additional_sales_person_ids;
    /**
     * <pre>
     * Used to link AccountGroups to a corresponding Salesforce Account Object
     * </pre>
     *
     * <code>string salesforce_id = 13;</code>
     */
    private $salesforce_id = '';

    public function __construct() {
        \GPBMetadata\AccountGroup\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <code>string origin = 1;</code>
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * <code>string origin = 1;</code>
     */
    public function setOrigin($var)
    {
        GPBUtil::checkString($var, True);
        $this->origin = $var;
    }

    /**
     * <code>repeated string job_id = 2;</code>
     */
    public function getJobId()
    {
        return $this->job_id;
    }

    /**
     * <code>repeated string job_id = 2;</code>
     */
    public function setJobId(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->job_id = $arr;
    }

    /**
     * <code>string customer_identifier = 3;</code>
     */
    public function getCustomerIdentifier()
    {
        return $this->customer_identifier;
    }

    /**
     * <code>string customer_identifier = 3;</code>
     */
    public function setCustomerIdentifier($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_identifier = $var;
    }

    /**
     * <code>repeated string tags = 5;</code>
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * <code>repeated string tags = 5;</code>
     */
    public function setTags(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tags = $arr;
    }

    /**
     * <code>repeated string action_lists = 6;</code>
     */
    public function getActionLists()
    {
        return $this->action_lists;
    }

    /**
     * <code>repeated string action_lists = 6;</code>
     */
    public function setActionLists(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->action_lists = $arr;
    }

    /**
     * <code>string social_profile_id = 7;</code>
     */
    public function getSocialProfileId()
    {
        return $this->social_profile_id;
    }

    /**
     * <code>string social_profile_id = 7;</code>
     */
    public function setSocialProfileId($var)
    {
        GPBUtil::checkString($var, True);
        $this->social_profile_id = $var;
    }

    /**
     * <code>string partner_id = 8;</code>
     */
    public function getPartnerId()
    {
        return $this->partner_id;
    }

    /**
     * <code>string partner_id = 8;</code>
     */
    public function setPartnerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->partner_id = $var;
    }

    /**
     * <code>string market_id = 9;</code>
     */
    public function getMarketId()
    {
        return $this->market_id;
    }

    /**
     * <code>string market_id = 9;</code>
     */
    public function setMarketId($var)
    {
        GPBUtil::checkString($var, True);
        $this->market_id = $var;
    }

    /**
     * <code>repeated string tax_ids = 10;</code>
     */
    public function getTaxIds()
    {
        return $this->tax_ids;
    }

    /**
     * <code>repeated string tax_ids = 10;</code>
     */
    public function setTaxIds(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->tax_ids = $arr;
    }

    /**
     * <pre>
     * Primary salesperson id
     * </pre>
     *
     * <code>string sales_person_id = 11;</code>
     */
    public function getSalesPersonId()
    {
        return $this->sales_person_id;
    }

    /**
     * <pre>
     * Primary salesperson id
     * </pre>
     *
     * <code>string sales_person_id = 11;</code>
     */
    public function setSalesPersonId($var)
    {
        GPBUtil::checkString($var, True);
        $this->sales_person_id = $var;
    }

    /**
     * <pre>
     * Additional salesperson ids assigned to an account group which is not the primary salesperson id
     * </pre>
     *
     * <code>repeated string additional_sales_person_ids = 12;</code>
     */
    public function getAdditionalSalesPersonIds()
    {
        return $this->additional_sales_person_ids;
    }

    /**
     * <pre>
     * Additional salesperson ids assigned to an account group which is not the primary salesperson id
     * </pre>
     *
     * <code>repeated string additional_sales_person_ids = 12;</code>
     */
    public function setAdditionalSalesPersonIds(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->additional_sales_person_ids = $arr;
    }

    /**
     * <pre>
     * Used to link AccountGroups to a corresponding Salesforce Account Object
     * </pre>
     *
     * <code>string salesforce_id = 13;</code>
     */
    public function getSalesforceId()
    {
        return $this->salesforce_id;
    }

    /**
     * <pre>
     * Used to link AccountGroups to a corresponding Salesforce Account Object
     * </pre>
     *
     * <code>string salesforce_id = 13;</code>
     */
    public function setSalesforceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->salesforce_id = $var;
    }

}

