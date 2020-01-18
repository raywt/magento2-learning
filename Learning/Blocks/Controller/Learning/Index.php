<?php
namespace Learning\Blocks\Controller\Learning;
use Learning\Blocks\Controller\Base;
    
class Index extends Base
{   
    public function execute()
    {
        $objectManager = $this->getObjectManager();
        $layout = $objectManager->get('Magento\Framework\View\Layout');

        $blockParent = $layout->createBlock(
            'Magento\Framework\View\Element\Template', 'learning_blocks_parent'
        );
        $blockParent->setTemplate(
            'Learning_Blocks::parent.phtml'
        );

        $blockChild1 = $layout->createBlock(
            'Magento\Framework\View\Element\Template'
        );
        $blockChild1->setTemplate(
            'Learning_Blocks::blank/blank.phtml'
        );

        $blockParent->append($blockChild1);

        $blockChild2 = $layout->createBlock(
            'Magento\Framework\View\Element\Template'
        );
        $blockChild2->setTemplate(
            'Learning_Blocks::named-child.phtml', 'named_child_block'
        );

        $blockParent->append($blockChild2);

        $blockChild3 = $layout->createBlock(
            'Learning\Blocks\Block\Example\Example'
        );
        $blockChild3->setTemplate(
            'Learning_Blocks::example/value.phtml'
        );

        $blockParent->append($blockChild3);
        
        $layout->addContainer('top', 'The top level container');

        // Magento\Framework\View\Layout\Data\Structure
        $structure = $layout->getStructure(); //note: not standard magento
        $structure->setAsChild('learning_blocks_parent', 'top');
        
        $layout->generateElements();
        echo $layout->getOutput();
    }
}
