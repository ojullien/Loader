<?php

namespace OphpTest\Loader\Exception;

class ExceptionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @covers \Ophp\Loader\Exception\BadFunctionCallException
     * @group specification
     * @expectedException Ophp\Loader\Exception\BadFunctionCallException
     */
    public function testBadFunctionCallException()
    {
        throw new \Ophp\Loader\Exception\BadFunctionCallException( __METHOD__ );
    }

    /**
     * @covers \Ophp\Loader\Exception\BadMethodCallException
     * @group specification
     * @expectedException Ophp\Loader\Exception\BadMethodCallException
     */
    public function testBadMethodCallException()
    {
        throw new \Ophp\Loader\Exception\BadMethodCallException( __METHOD__ );
    }

    /**
     * @covers \Ophp\Loader\Exception\DomainException
     * @group specification
     * @expectedException Ophp\Loader\Exception\DomainException
     */
    public function testDomainException()
    {
        throw new \Ophp\Loader\Exception\DomainException( __METHOD__ );
    }

    /**
     * @covers \Ophp\Loader\Exception\InvalidArgumentException
     * @group specification
     * @expectedException Ophp\Loader\Exception\InvalidArgumentException
     */
    public function testInvalidArgumentException()
    {
        throw new \Ophp\Loader\Exception\InvalidArgumentException( __METHOD__ );
    }

    /**
     * @covers \Ophp\Loader\Exception\LengthException
     * @group specification
     * @expectedException Ophp\Loader\Exception\LengthException
     */
    public function testLengthException()
    {
        throw new \Ophp\Loader\Exception\LengthException( __METHOD__ );
    }

    /**
     * @covers \Ophp\Loader\Exception\OutOfBoundsException
     * @group specification
     * @expectedException Ophp\Loader\Exception\OutOfBoundsException
     */
    public function testOutOfBoundsException()
    {
        throw new \Ophp\Loader\Exception\OutOfBoundsException( __METHOD__ );
    }

    /**
     * @covers \Ophp\Loader\Exception\OutOfRangeException
     * @group specification
     * @expectedException Ophp\Loader\Exception\OutOfRangeException
     */
    public function testOutOfRangeException()
    {
        throw new \Ophp\Loader\Exception\OutOfRangeException( __METHOD__ );
    }

    /**
     * @covers \Ophp\Loader\Exception\OverflowException
     * @group specification
     * @expectedException Ophp\Loader\Exception\OverflowException
     */
    public function testOverflowException()
    {
        throw new \Ophp\Loader\Exception\OverflowException( __METHOD__ );
    }

    /**
     * @covers \Ophp\Loader\Exception\RuntimeException
     * @group specification
     * @expectedException Ophp\Loader\Exception\RuntimeException
     */
    public function testRuntimeException()
    {
        throw new \Ophp\Loader\Exception\RuntimeException( __METHOD__ );
    }

    /**
     * @covers \Ophp\Loader\Exception\UnderflowException
     * @group specification
     * @expectedException Ophp\Loader\Exception\UnderflowException
     */
    public function testUnderflowException()
    {
        throw new \Ophp\Loader\Exception\UnderflowException( __METHOD__ );
    }

    /**
     * @covers \Ophp\Loader\Exception\UnexpectedValueException
     * @group specification
     * @expectedException Ophp\Loader\Exception\UnexpectedValueException
     */
    public function testUnexpectedValueException()
    {
        throw new \Ophp\Loader\Exception\UnexpectedValueException( __METHOD__ );
    }

}
