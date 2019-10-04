<?php
namespace Vendasta\AccountGroup\V1;

use Accountgroup\V1\UpdateOperation;

class CreateAccountGroupRequest {
    /**
     * <code>.accountgroup.v1.AccountGroupLocation account_group_nap = 1;</code>
     */
    private $account_group_nap = null;
    private $updateOperations = null;

    public function setAccountGroupNap(AccountGroupLocation $business) {
        $this->account_group_nap = $business;
    }

    public function setPartnerId(string $partnerId) {
        $externalIdentifiers = new \Accountgroup\V1\AccountGroupExternalIdentifiers();
        $externalIdentifiers->setPartnerId($partnerId);
        $updateOperation = new UpdateOperation();
        $updateOperation->setAccountGroupExternalIdentifiers($externalIdentifiers);
        $this->updateOperations = array($updateOperation);
    }

    public function getAccountGroupNap(): AccountGroupLocation {
        return $this->account_group_nap;
    }

    public function getUpdateOperations() {
        return $this->updateOperations;
    }

    public function toCreateAccountGroupRequest(): \Accountgroup\V1\CreateAccountGroupRequest{

        $createRequest = new \Accountgroup\V1\CreateAccountGroupRequest();

        $accountGroupNap = new \Accountgroup\V1\AccountGroupLocation();

        $reqNap = $this->getAccountGroupNap();
        $accountGroupNap->setCompanyName($reqNap->getCompanyName());
        $accountGroupNap->setAddress($reqNap->getAddress());
        $accountGroupNap->setAddress2($reqNap->getAddress2());
        $accountGroupNap->setCity($reqNap->getCity());
        $accountGroupNap->setState($reqNap->getState());
        $accountGroupNap->setZip($reqNap->getZip());
        $accountGroupNap->setCountry($reqNap->getCountry());
        $accountGroupNap->setWebsite($reqNap->getWebsite());
        $workNumber = $reqNap->getWorkNumber();
        $accountGroupNap->setWorkNumber($workNumber);
        $callTrackingNumber = $reqNap->getCallTrackingNumber();
        $accountGroupNap->setCallTrackingNumber($callTrackingNumber);
        $location = $reqNap->getLocation();
        $accountGroupNap->setLocation($location);
        $accountGroupNap->setTimezone($reqNap->getTimezone());
        $accountGroupNap->setServiceAreaBusiness($reqNap->getServiceAreaBusiness());

        $createRequest->setAccountGroupNap($accountGroupNap);
        $updateOperations = $this->getUpdateOperations();
        $createRequest->setUpdateOperations($updateOperations);
        return $createRequest;

    }
    
}