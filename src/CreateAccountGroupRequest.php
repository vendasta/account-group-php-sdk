<?php
namespace Vendasta\AccountGroup\V1;

use Accountgroup\V1\UpdateOperation;

class CreateAccountGroupRequest {
    /**
     * <code>.accountgroup.v1.AccountGroupLocation account_group_nap = 1;</code>
     */
    private $account_group_nap = null;
    private $updateOperations = null;

    public function __construct(){
    }

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
    
}