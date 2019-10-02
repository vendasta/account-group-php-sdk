<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: account_group/v1/api.proto

namespace Accountgroup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * ActionListAppend is deprecated, use ActionListModify instead
 * </pre>
 *
 * Protobuf type <code>accountgroup.v1.ActionListAppend</code>
 */
class ActionListAppend extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string action_list_name = 1;</code>
     */
    private $action_list_name = '';

    public function __construct() {
        \GPBMetadata\AccountGroup\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <code>string action_list_name = 1;</code>
     */
    public function getActionListName()
    {
        return $this->action_list_name;
    }

    /**
     * <code>string action_list_name = 1;</code>
     */
    public function setActionListName($var)
    {
        GPBUtil::checkString($var, True);
        $this->action_list_name = $var;
    }

}

