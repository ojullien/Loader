<?php
/**
 * This file is a part of the Oseille framework
 *
 * @package Oseille\Loader\Exception
 * @license MIT <https://github.com/Oseille/Loader/blob/master/LICENSE>
 */
namespace Oseille\Loader\Exception;

/**
 * Exception thrown if a value is not a valid key.
 * This represents errors that cannot be detected at compile time.
 */
class OutOfBoundsException extends \OutOfBoundsException implements ExceptionInterface
{
}
