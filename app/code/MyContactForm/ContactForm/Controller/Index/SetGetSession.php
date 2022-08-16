<?php
namespace vendor_name\module_name\Controller\SetGetSession;

use Magento\Framework\App\Action\Action;
use Magento\Customer\Model\Session;

class SetGetSession extends Action
{
    protected $customerSession;

    public function _construct(
        \Magento\Customer\Model\Session $customerSession
    ) {
        $this->customerSession = $customerSession;
    }   

    public function execute()
    {

    }
}