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
 * Exception thrown if an error which can only be found on runtime occurs.
 */
class RuntimeException extends \RuntimeException implements ExceptionInterface
{
}
