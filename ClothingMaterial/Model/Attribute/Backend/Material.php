<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Learning\ClothingMaterial\Model\Attribute\Backend;

class Material extends \Magento\Eav\Model\Entity\Attribute\Backend\AbstractBackend
{

    /**
     * Validate
     * @param \Magento\Catalog\Model\Product $object
     * @throws \Magento\Framework\Exception\LocalizedException
     * @return bool
     */
    public function validate($object)
    {
        $attributeSets = array("1","2","3","4","5","6","7","8","9","10");
        $value = $object->getData($this->getAttribute()->getAttributeCode());
        if ( (in_array($object->getAttributeSetId(), $attributeSets)) && ($value == 'wool')) {
            throw new \Magento\Framework\Exception\LocalizedException(
                __('This Attribute Set can not be wool.')
            );
        }
        return true;
    }

    /**
     * afterSave
     * 
     */
    public function afterSave($object)
    {
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/test.log');
        $logger = $this->logger->Logger();
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info('Attribute saved');
    }
}