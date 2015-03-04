<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\Setup;

class FlagConfigOptionTest extends \PHPUnit_Framework_TestCase
{
    public function testGetFrontendType()
    {
        $option = new FlagConfigOption('test', FlagConfigOption::FRONTEND_WIZARD_FLAG);
        $this->assertEquals(FlagConfigOption::FRONTEND_WIZARD_FLAG, $option->getFrontendType());
    }
}
