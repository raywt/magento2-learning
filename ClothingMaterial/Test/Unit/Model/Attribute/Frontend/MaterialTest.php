<?php
namespace Learning\ClothingMaterial\Test\Unit\Model\Attribute\Frontend;

use PHPUnit\Framework\TestCase;
use Learning\ClothingMaterial\Model\Attribute\Frontend\Material;

class MaterialTest extends TestCase
{
    protected function setUp()
    {
        $this->object = $this->createMock(\Magento\Eav\Model\Entity\Attribute\Frontend\AbstractFrontend::class);
    }

    public function testEquality()
    {
        $this->assertSame(
            [1, 2, 3, 4, 5, 6],
            [1, 2, 3, 4, 5, 6]
        );
    }

    public function testGetValue()
    {
        $value = (new Material($this->object))->getValue();
        $this->assertTrue(
            $value
        );
    }
}