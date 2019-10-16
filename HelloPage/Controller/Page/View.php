<?php 
/** https://devdocs.magento.com/videos/fundamentals/create-a-new-page/ */
namespace Learning\HelloPage\Controller\Page;
class View extends \Magento\Framework\App\Action\Action
{

  /**
   * @var \Magento\Framework\Controller\Result\JsonFactory
   */
  protected $resultJsonFactory;
  
  /**
   * @param \Magento\Framework\App\Action\Context $context
   * @param \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory
   */
  public function __construct(
    \Magento\Framework\App\Action\Context $context,
    \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory)
  {
    $this->resultJsonFactory = $resultJsonFactory;
    parent::__construct($context);
  }

  /**
   * View page action
   *
   * @return \Magento\Framework\Controller\ResultInterface
   */
  public function execute()
  {
    $result = $this->resultJsonFactory->create();
    $data = ['message' => 'Hello world!'];

    return $result->setData($data);
  }
}
