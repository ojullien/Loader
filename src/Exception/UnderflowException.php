<?php
/**
 * This file is a part of the Ophp framework
 *
 * @category Ophp-Loader
 * @package   Exception
 * @license MIT <https://github.com/ojullien/Ophp-Loader/blob/master/LICENSE>
 */
namespace Ophp\Loader\Exception;

/**
 * Exception thrown when performing an invalid operation on an empty container, such as removing an element.
 * This represents errors that cannot be detected at compile time.
 */
class UnderflowException extends \UnderflowException implements ExceptionInterface
{
}
