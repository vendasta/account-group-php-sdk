<?php
namespace Vendasta\AccountGroup\V1;


class AccountGroupLocation {
    private $location = null;
    
    public function __construct() {
        $this->location = new \Accountgroup\V1\AccountGroupLocation();
    }

    public function getCompanyName()
    {
        return $this->location->getCompanyName();
    }

    public function setCompanyName($var)
    {
        $this->location->setCompanyName($var);
    }

    public function getAddress()
    {
        return $this->location->getAddress();
    }

    public function setAddress($var)
    {
        $this->location->setAddress($var);
    }

    public function getAddress2()
    {
        return $this->location->getAddress2();
    }

    public function setAddress2($var)
    {
        $this->location->setAddress2($var);
    }

    public function getCity()
    {
        return $this->location->getCity();
    }

    public function setCity($var)
    {
        $this->location->setCity($var);
    }

    public function getState()
    {
        return $this->location->getState();
    }

    public function setState($var)
    {
        $this->location->setState($var);
    }

    public function getZip()
    {
        return $this->location->getZip();
    }

    public function setZip($var)
    {
        $this->location->setZip($var);
    }

    public function getCountry()
    {
        return $this->location->getCountry();
    }

    public function setCountry($var)
    {
        $this->location->setCountry($var);
    }

    public function getWebsite()
    {
        return $this->location->getWebsite();
    }

    public function setWebsite($var)
    {
        $this->location->setWebsite($var);
    }

    public function getWorkNumber()
    {
        return $this->location->getWorkNumber();
    }

    public function setWorkNumber(&$var)
    {
        $this->location->setWorkNumber($var);
    }

    public function getCallTrackingNumber()
    {
        return $this->location->getCallTrackingNumber();
    }

    public function setCallTrackingNumber(&$var)
    {
        $this->location->setWorkNumber($var);
    }

    public function getLocation()
    {
        return $this->location->getLocation();
    }

    public function setLocation(&$var)
    {
        $this->location->setLocation($var);
    }

    public function getTimezone()
    {
        return $this->location->getTimezone();
    }

    public function setTimezone($var)
    {
        $this->location->setTimezone($var);
    }

    public function getServiceAreaBusiness()
    {
        return $this->location->getServiceAreaBusiness();
    }

    public function setServiceAreaBusiness($var)
    {
        $this->location->setServiceAreaBusiness($var);
    }
}