<?php
namespace Learning\ClothingMaterial\Model\Attribute\Frontend;

class Material extends \Magento\Eav\Model\Entity\Attribute\Frontend\AbstractFrontend
{
    public function getValue(\Magento\Framework\DataObject $object)
    {
        $value = $object->getData($this->getAttribute()->getAttributeCode());
        return "<span class=\"clothing-material\">&nbsp;$value</span>";
    }
}