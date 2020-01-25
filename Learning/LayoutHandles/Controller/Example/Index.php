<?php
namespace Learning\LayoutHandles\Controller\Example;
    
class Index extends \Magento\Framework\App\Action\Action
{   
    protected $resultPageFactory;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {    
        $this->resultPageFactory = $resultPageFactory;
        return parent::__construct($context);
    }           
    public function execute()
    {
        $pageObject = $this->resultPageFactory->create();
        //$pageObject->addHandle('custom_handle');
        return $pageObject;
    }
}
