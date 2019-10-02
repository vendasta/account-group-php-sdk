<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: account_group/v1/api.proto

namespace Accountgroup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>accountgroup.v1.SocialURLs</code>
 */
class SocialURLs extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string googleplus_url = 1;</code>
     */
    private $googleplus_url = '';
    /**
     * <code>string linkedin_url = 2;</code>
     */
    private $linkedin_url = '';
    /**
     * <code>string foursquare_url = 3;</code>
     */
    private $foursquare_url = '';
    /**
     * <code>string twitter_url = 4;</code>
     */
    private $twitter_url = '';
    /**
     * <code>string facebook_url = 5;</code>
     */
    private $facebook_url = '';
    /**
     * <code>string rss_url = 6;</code>
     */
    private $rss_url = '';
    /**
     * <code>string youtube_url = 7;</code>
     */
    private $youtube_url = '';
    /**
     * <code>string instagram_url = 8;</code>
     */
    private $instagram_url = '';
    /**
     * <code>string pinterest_url = 9;</code>
     */
    private $pinterest_url = '';

    public function __construct() {
        \GPBMetadata\AccountGroup\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <code>string googleplus_url = 1;</code>
     */
    public function getGoogleplusUrl()
    {
        return $this->googleplus_url;
    }

    /**
     * <code>string googleplus_url = 1;</code>
     */
    public function setGoogleplusUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->googleplus_url = $var;
    }

    /**
     * <code>string linkedin_url = 2;</code>
     */
    public function getLinkedinUrl()
    {
        return $this->linkedin_url;
    }

    /**
     * <code>string linkedin_url = 2;</code>
     */
    public function setLinkedinUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->linkedin_url = $var;
    }

    /**
     * <code>string foursquare_url = 3;</code>
     */
    public function getFoursquareUrl()
    {
        return $this->foursquare_url;
    }

    /**
     * <code>string foursquare_url = 3;</code>
     */
    public function setFoursquareUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->foursquare_url = $var;
    }

    /**
     * <code>string twitter_url = 4;</code>
     */
    public function getTwitterUrl()
    {
        return $this->twitter_url;
    }

    /**
     * <code>string twitter_url = 4;</code>
     */
    public function setTwitterUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->twitter_url = $var;
    }

    /**
     * <code>string facebook_url = 5;</code>
     */
    public function getFacebookUrl()
    {
        return $this->facebook_url;
    }

    /**
     * <code>string facebook_url = 5;</code>
     */
    public function setFacebookUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->facebook_url = $var;
    }

    /**
     * <code>string rss_url = 6;</code>
     */
    public function getRssUrl()
    {
        return $this->rss_url;
    }

    /**
     * <code>string rss_url = 6;</code>
     */
    public function setRssUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->rss_url = $var;
    }

    /**
     * <code>string youtube_url = 7;</code>
     */
    public function getYoutubeUrl()
    {
        return $this->youtube_url;
    }

    /**
     * <code>string youtube_url = 7;</code>
     */
    public function setYoutubeUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->youtube_url = $var;
    }

    /**
     * <code>string instagram_url = 8;</code>
     */
    public function getInstagramUrl()
    {
        return $this->instagram_url;
    }

    /**
     * <code>string instagram_url = 8;</code>
     */
    public function setInstagramUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->instagram_url = $var;
    }

    /**
     * <code>string pinterest_url = 9;</code>
     */
    public function getPinterestUrl()
    {
        return $this->pinterest_url;
    }

    /**
     * <code>string pinterest_url = 9;</code>
     */
    public function setPinterestUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->pinterest_url = $var;
    }

}

