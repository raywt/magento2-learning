<?php
namespace Learning\Blocks\Block\Example;

/**
 * Place logic for templates in here 
 */
class Example extends \Magento\Framework\View\Element\Template
{
    public function getSomething() 
    {
        // get something and return it
        return '<p>something</p>';
    }
}