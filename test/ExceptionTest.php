<?php
declare(strict_types=1);
/**
 * @see       https://github.com/niceshops/nice-{component} for the canonical source repository
 * @license   https://github.com/niceshops/nice-{component}/blob/master/LICENSE BSD 3-Clause License
 */

namespace NiceshopsDev\ComponentNamespace;

use NiceshopsDev\ComponentNamespace\PHPUnit\DefaultTestCase;
use PHPUnit\Framework\MockObject\MockObject;

/**
 * Class ExceptionTest
 * @package NiceshopsDev\ComponentNamespace
 */
class ExceptionTest extends DefaultTestCase
{
    
    
    /**
     * @var Exception|MockObject
     */
    protected $object;
    
    
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     *
     */
    protected function setUp()
    {
        $this->object = $this->getMockBuilder(Exception::class)->disableOriginalConstructor()->getMockForAbstractClass();
    }
    
    
    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }
    
    
    /**
     * @group integration
     * @small
     */
    public function testTestClassExists()
    {
        $this->assertTrue(class_exists(Exception::class), "Class Exists");
        $this->assertTrue(is_a($this->object, Exception::class), "Mock Object is set");
    }
}
