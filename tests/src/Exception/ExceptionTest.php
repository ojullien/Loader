<?php

namespace OseilleTest\Loader\Exception;

class ExceptionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @covers \Oseille\Loader\Exception\BadFunctionCallException
     * @group specification
     * @expectedException Oseille\Loader\Exception\BadFunctionCallException
     */
    public function testBadFunctionCallException()
    {
        throw new \Oseille\Loader\Exception\BadFunctionCallException(__METHOD__);
    }

    /**
     * @covers \Oseille\Loader\Exception\BadMethodCallException
     * @group specification
     * @expectedException Oseille\Loader\Exception\BadMethodCallException
     */
    public function testBadMethodCallException()
    {
        throw new \Oseille\Loader\Exception\BadMethodCallException(__METHOD__);
    }

    /**
     * @covers \Oseille\Loader\Exception\DomainException
     * @group specification
     * @expectedException Oseille\Loader\Exception\DomainException
     */
    public function testDomainException()
    {
        throw new \Oseille\Loader\Exception\DomainException(__METHOD__);
    }

    /**
     * @covers \Oseille\Loader\Exception\InvalidArgumentException
     * @group specification
     * @expectedException Oseille\Loader\Exception\InvalidArgumentException
     */
    public function testInvalidArgumentException()
    {
        throw new \Oseille\Loader\Exception\InvalidArgumentException(__METHOD__);
    }

    /**
     * @covers \Oseille\Loader\Exception\LengthException
     * @group specification
     * @expectedException Oseille\Loader\Exception\LengthException
     */
    public function testLengthException()
    {
        throw new \Oseille\Loader\Exception\LengthException(__METHOD__);
    }

    /**
     * @covers \Oseille\Loader\Exception\OutOfBoundsException
     * @group specification
     * @expectedException Oseille\Loader\Exception\OutOfBoundsException
     */
    public function testOutOfBoundsException()
    {
        throw new \Oseille\Loader\Exception\OutOfBoundsException(__METHOD__);
    }

    /**
     * @covers \Oseille\Loader\Exception\OutOfRangeException
     * @group specification
     * @expectedException Oseille\Loader\Exception\OutOfRangeException
     */
    public function testOutOfRangeException()
    {
        throw new \Oseille\Loader\Exception\OutOfRangeException(__METHOD__);
    }

    /**
     * @covers \Oseille\Loader\Exception\OverflowException
     * @group specification
     * @expectedException Oseille\Loader\Exception\OverflowException
     */
    public function testOverflowException()
    {
        throw new \Oseille\Loader\Exception\OverflowException(__METHOD__);
    }

    /**
     * @covers \Oseille\Loader\Exception\RuntimeException
     * @group specification
     * @expectedException Oseille\Loader\Exception\RuntimeException
     */
    public function testRuntimeException()
    {
        throw new \Oseille\Loader\Exception\RuntimeException(__METHOD__);
    }

    /**
     * @covers \Oseille\Loader\Exception\UnderflowException
     * @group specification
     * @expectedException Oseille\Loader\Exception\UnderflowException
     */
    public function testUnderflowException()
    {
        throw new \Oseille\Loader\Exception\UnderflowException(__METHOD__);
    }

    /**
     * @covers \Oseille\Loader\Exception\UnexpectedValueException
     * @group specification
     * @expectedException Oseille\Loader\Exception\UnexpectedValueException
     */
    public function testUnexpectedValueException()
    {
        throw new \Oseille\Loader\Exception\UnexpectedValueException(__METHOD__);
    }
}
