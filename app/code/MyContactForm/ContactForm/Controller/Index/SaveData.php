<?php

namespace MyContactForm\ContactForm\Controller\Index;

use \Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class SaveData extends Action
{
    protected $_resultPageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->_resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $PostValue = $this->getRequest()->getPost();
        // print_r($PostValue);
        return $this->_resultPageFactory->create();
    }
} 
?>