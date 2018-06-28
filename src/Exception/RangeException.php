<?php
/**
 * This file is a part of the Ophp framework
 *
 * @category Ophp-Http
 * @package   Exception
 * @license MIT <https://github.com/ojullien/ophp-Db/blob/master/LICENSE>
 */
namespace Ophp\Http\Exception;

/**
 * Exception thrown to indicate range errors during program execution.
 * Normally this means there was an arithmetic error other than under/overflow.
 * This is the runtime version of DomainException.
 * This represents errors that cannot be detected at compile time.
 */
class RangeException extends \RangeException implements ExceptionInterface
{
}
