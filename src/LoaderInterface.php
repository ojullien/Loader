<?php

/**
 * This file is a part of the Oseille framework
 *
 * @package Oseille\Loader
 * @license MIT <https://github.com/Oseille/Loader/blob/master/LICENSE>
 */
namespace Oseille\Loader;

/**
 * Interface for classes that may register with the spl_autoload registry
 */
interface LoaderInterface
{

    /**
     * Constructor.
     *
     * @param  null|array $options Autoloader configuration.
     * @throws \Exception If something wrong occured.
     */
    public function __construct(array $options = null);

    /**
     * Configure the autoloader.
     *
     * @param array $options Autoloader configuration.
     * @return void
     * @throws \Exception If something wrong occured.
     */
    public function setOptions(array $options);

    /**
     * Attempts to load the class specified.
     * Returns a boolean FALSE on failure, or a string indicating the class loaded on success.
     *
     * @param   string $class
     * @return  mixed
     */
    public function autoload($class);

    /**
     * Register the autoloader with spl_autoload registry.
     *
     * @return void
     */
    public function register();
}
