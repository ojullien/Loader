<?php namespace oju\Exception;

class CExceptionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @covers \oju\Exception\BadFunctionCallException
     * @group specification
     * @expectedException oju\Exception\BadFunctionCallException
     */
    public function testBadFunctionCallException()
    {
        throw new \oju\Exception\BadFunctionCallException( __METHOD__ );
    }

    /**
     * @covers \oju\Exception\BadMethodCallException
     * @group specification
     * @expectedException oju\Exception\BadMethodCallException
     */
    public function testBadMethodCallException()
    {
        throw new \oju\Exception\BadMethodCallException( __METHOD__ );
    }

    /**
     * @covers \oju\Exception\DomainException
     * @group specification
     * @expectedException oju\Exception\DomainException
     */
    public function testDomainException()
    {
        throw new \oju\Exception\DomainException( __METHOD__ );
    }

    /**
     * @covers \oju\Exception\InvalidArgumentException
     * @group specification
     * @expectedException oju\Exception\InvalidArgumentException
     */
    public function testInvalidArgumentException()
    {
        throw new \oju\Exception\InvalidArgumentException( __METHOD__ );
    }

    /**
     * @covers \oju\Exception\LengthException
     * @group specification
     * @expectedException oju\Exception\LengthException
     */
    public function testLengthException()
    {
        throw new \oju\Exception\LengthException( __METHOD__ );
    }

    /**
     * @covers \oju\Exception\OutOfBoundsException
     * @group specification
     * @expectedException oju\Exception\OutOfBoundsException
     */
    public function testOutOfBoundsException()
    {
        throw new \oju\Exception\OutOfBoundsException( __METHOD__ );
    }

    /**
     * @covers \oju\Exception\OutOfRangeException
     * @group specification
     * @expectedException oju\Exception\OutOfRangeException
     */
    public function testOutOfRangeException()
    {
        throw new \oju\Exception\OutOfRangeException( __METHOD__ );
    }

    /**
     * @covers \oju\Exception\OverflowException
     * @group specification
     * @expectedException oju\Exception\OverflowException
     */
    public function testOverflowException()
    {
        throw new \oju\Exception\OverflowException( __METHOD__ );
    }

    /**
     * @covers \oju\Exception\RuntimeException
     * @group specification
     * @expectedException oju\Exception\RuntimeException
     */
    public function testRuntimeException()
    {
        throw new \oju\Exception\RuntimeException( __METHOD__ );
    }

    /**
     * @covers \oju\Exception\UnderflowException
     * @group specification
     * @expectedException oju\Exception\UnderflowException
     */
    public function testUnderflowException()
    {
        throw new \oju\Exception\UnderflowException( __METHOD__ );
    }

    /**
     * @covers \oju\Exception\UnexpectedValueException
     * @group specification
     * @expectedException oju\Exception\UnexpectedValueException
     */
    public function testUnexpectedValueException()
    {
        throw new \oju\Exception\UnexpectedValueException( __METHOD__ );
    }

}
