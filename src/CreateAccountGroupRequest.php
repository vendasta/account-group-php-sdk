<?php
namespace Vendasta\AccountGroup\V1;

class CreateAccountGroupRequest {
    /**
     * <code>.accountgroup.v1.AccountGroupLocation account_group_nap = 1;</code>
     */
    private $account_group_nap = null;

    public function setAccountGroupNap(AccountGroupLocation $business) {
        $this->account_group_nap = $business;
    }

    public function getAccountGroupNap() {
        return $this->account_group_nap;
    }
}