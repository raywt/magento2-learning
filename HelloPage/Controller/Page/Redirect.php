<?php 
/** https://devdocs.magento.com/videos/fundamentals/create-a-new-page/ */
namespace Learning\HelloPage\Controller\Page;
class Redirect extends \Magento\Framework\App\Action\Action
{

  /**
   * @var \Magento\Framework\Controller\Result\RedirectFactory
   */
  protected $resultRedirectFactory;
  
  /**
   * @param \Magento\Framework\App\Action\Context $context
   * @param \Magento\Framework\Controller\Result\RedirectFactory $resultRedirectFactory
   */
  public function __construct(
    \Magento\Framework\App\Action\Context $context,
    \Magento\Framework\Controller\Result\RedirectFactory $resultRedirectFactory)
  {
    $this->resultRedirectFactory = $resultRedirectFactory;
    parent::__construct($context);
  }

  /**
   * View page action
   *
   * @return \Magento\Framework\Controller\ResultInterface
   */
  public function execute()
  {
    $resultRedirect = $this->resultRedirectFactory->create();
    $resultRedirect->setUrl('/customer/account/create');
    return $resultRedirect;
  }
}
