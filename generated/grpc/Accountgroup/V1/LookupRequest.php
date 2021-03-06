<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: account_group/v1/api.proto

namespace Accountgroup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>accountgroup.v1.LookupRequest</code>
 */
class LookupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.accountgroup.v1.ProjectionFilter projection_filter = 1;</code>
     */
    private $projection_filter = null;
    /**
     * <code>.accountgroup.v1.LookupRequest.Filters filters = 2;</code>
     */
    private $filters = null;
    /**
     * <code>string cursor = 3;</code>
     */
    private $cursor = '';
    /**
     * <code>int64 page_size = 4;</code>
     */
    private $page_size = 0;
    /**
     * <code>.accountgroup.v1.SortOptions sort_options = 5;</code>
     */
    private $sort_options = null;
    /**
     * <pre>
     * search_term is an arbitrary string to perform full text search across the account group's location data
     * </pre>
     *
     * <code>string search_term = 6;</code>
     */
    private $search_term = '';

    public function __construct() {
        \GPBMetadata\AccountGroup\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <code>.accountgroup.v1.ProjectionFilter projection_filter = 1;</code>
     */
    public function getProjectionFilter()
    {
        return $this->projection_filter;
    }

    /**
     * <code>.accountgroup.v1.ProjectionFilter projection_filter = 1;</code>
     */
    public function setProjectionFilter(&$var)
    {
        GPBUtil::checkMessage($var, \Accountgroup\V1\ProjectionFilter::class);
        $this->projection_filter = $var;
    }

    /**
     * <code>.accountgroup.v1.LookupRequest.Filters filters = 2;</code>
     */
    public function getFilters()
    {
        return $this->filters;
    }

    /**
     * <code>.accountgroup.v1.LookupRequest.Filters filters = 2;</code>
     */
    public function setFilters(&$var)
    {
        GPBUtil::checkMessage($var, \Accountgroup\V1\LookupRequest_Filters::class);
        $this->filters = $var;
    }

    /**
     * <code>string cursor = 3;</code>
     */
    public function getCursor()
    {
        return $this->cursor;
    }

    /**
     * <code>string cursor = 3;</code>
     */
    public function setCursor($var)
    {
        GPBUtil::checkString($var, True);
        $this->cursor = $var;
    }

    /**
     * <code>int64 page_size = 4;</code>
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * <code>int64 page_size = 4;</code>
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->page_size = $var;
    }

    /**
     * <code>.accountgroup.v1.SortOptions sort_options = 5;</code>
     */
    public function getSortOptions()
    {
        return $this->sort_options;
    }

    /**
     * <code>.accountgroup.v1.SortOptions sort_options = 5;</code>
     */
    public function setSortOptions(&$var)
    {
        GPBUtil::checkMessage($var, \Accountgroup\V1\SortOptions::class);
        $this->sort_options = $var;
    }

    /**
     * <pre>
     * search_term is an arbitrary string to perform full text search across the account group's location data
     * </pre>
     *
     * <code>string search_term = 6;</code>
     */
    public function getSearchTerm()
    {
        return $this->search_term;
    }

    /**
     * <pre>
     * search_term is an arbitrary string to perform full text search across the account group's location data
     * </pre>
     *
     * <code>string search_term = 6;</code>
     */
    public function setSearchTerm($var)
    {
        GPBUtil::checkString($var, True);
        $this->search_term = $var;
    }

}

