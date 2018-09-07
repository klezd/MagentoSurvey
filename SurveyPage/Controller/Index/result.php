<?php
namespace Your\Module\Controller;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Element\Messages;
use Magento\Framework\View\Result\PageFactory;

class result extends Action 
{
    protected $_messageManager;

    public function __construct(
        Context $context,
        \Magento\Framework\Message\ManagerInterface $messageManager
        ) {
        parent::__construct($context);
        $this->_messageManager = $messageManager;
    }

    public function execute()
    {
        // Do Validation
        
        if (empty($input)) {
            $this->_messageManager->addErrorMessage('Your Error Message');
        } else {
            $this->_messageManager->addSuccessMessage('Your Success Message');
        }
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl($this->_redirect->getRefererUrl());

        return $resultRedirect;
    }
}