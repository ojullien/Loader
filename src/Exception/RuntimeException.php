<?php
/**
 * This file is a part of the Oseille framework
 *
 * @package Oseille\Loader\Exception
 * @license MIT <https://github.com/Oseille/Loader/blob/master/LICENSE>
 */
namespace Oseille\Loader\Exception;

/**
 * Exception thrown if an error which can only be found on runtime occurs.
 */
class RuntimeException extends \RuntimeException implements ExceptionInterface
{
}
