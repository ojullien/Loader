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
 * Exception thrown when adding an element to a full container.
 * This represents errors that cannot be detected at compile time.
 */
class OverflowException extends \OverflowException implements ExceptionInterface
{
}
