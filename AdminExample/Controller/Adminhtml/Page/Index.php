<?php
/**
 * Copyright © 2017 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Learning\AdminExample\Controller\Adminhtml\Page;

use Magento\Framework\Controller\ResultFactory;

/**
 * Class Index
 * @package Learning\AdminExample\Controller\Adminhtml
 */
class Index extends \Magento\Backend\App\Action
{
    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Learning_AdminExample::config');
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_RAW)->setContents('This is the page');
    }
}