<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: account_group/v1/api.proto

namespace Accountgroup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>accountgroup.v1.CreateAccountGroupRequest</code>
 */
class CreateAccountGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.accountgroup.v1.AccountGroupLocation account_group_nap = 1;</code>
     */
    private $account_group_nap = null;
    /**
     * <pre>
     * ID of the partner's social profile group which the account will be associated with
     * </pre>
     *
     * <code>string social_profile_group_id = 2;</code>
     */
    private $social_profile_group_id = '';
    /**
     * <pre>
     * The set of update operations to be done to the extended account group data after the create.
     * </pre>
     *
     * <code>repeated .accountgroup.v1.UpdateOperation update_operations = 3;</code>
     */
    private $update_operations;

    public function __construct() {
        \GPBMetadata\AccountGroup\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <code>.accountgroup.v1.AccountGroupLocation account_group_nap = 1;</code>
     */
    public function getAccountGroupNap()
    {
        return $this->account_group_nap;
    }

    /**
     * <code>.accountgroup.v1.AccountGroupLocation account_group_nap = 1;</code>
     */
    public function setAccountGroupNap(&$var)
    {
        GPBUtil::checkMessage($var, \Accountgroup\V1\AccountGroupLocation::class);
        $this->account_group_nap = $var;
    }

    /**
     * <pre>
     * ID of the partner's social profile group which the account will be associated with
     * </pre>
     *
     * <code>string social_profile_group_id = 2;</code>
     */
    public function getSocialProfileGroupId()
    {
        return $this->social_profile_group_id;
    }

    /**
     * <pre>
     * ID of the partner's social profile group which the account will be associated with
     * </pre>
     *
     * <code>string social_profile_group_id = 2;</code>
     */
    public function setSocialProfileGroupId($var)
    {
        GPBUtil::checkString($var, True);
        $this->social_profile_group_id = $var;
    }

    /**
     * <pre>
     * The set of update operations to be done to the extended account group data after the create.
     * </pre>
     *
     * <code>repeated .accountgroup.v1.UpdateOperation update_operations = 3;</code>
     */
    public function getUpdateOperations()
    {
        return $this->update_operations;
    }

    /**
     * <pre>
     * The set of update operations to be done to the extended account group data after the create.
     * </pre>
     *
     * <code>repeated .accountgroup.v1.UpdateOperation update_operations = 3;</code>
     */
    public function setUpdateOperations(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Accountgroup\V1\UpdateOperation::class);
        $this->update_operations = $arr;
    }

}

