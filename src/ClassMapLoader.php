<?php
/**
 * This file is a part of the Ophp framework
 *
 * @package Loader
 * @license MIT <https://github.com/ojullien/Ophp-Loader/blob/master/LICENSE>
 */
namespace Ophp\Loader;

/**
 * This class implements a class map autoloading strategy.
 */
final class ClassMapLoader implements \Ophp\Loader\LoaderInterface
{
    /** Class section
     * ************** */

    /**
     * Constructor.
     *
     * @param null|array $options Array of options, where each option is either
     *        a filename returning a class map, or an  associative array of
     *        class name/filename pairs.
     *        As an example: a configuration defining both a file-based class
     *        map, and an array map
     *        $options = array( __DIR__ . '/library/autoloader_classmap.php', // file-based class map
     *                          array( 'Aa\Bb' => __DIR__ . '/Aa/Bb.php',     // array class map
     *                          'Cc\Dd' => __DIR__ . '/Cc/Dd.php' ) );
     * @codeCoverageIgnore
     */
    public function __construct( array $options = NULL )
    {
        if( NULL !== $options )
        {
            $this->setOptions( $options );
        }
    }

    /**
     * Destructor.
     *
     * @codeCoverageIgnore
     */
    public function __destruct()
    {
        $this->aMap        = [ ];
        $this->aMapsLoaded = [ ];
    }

    /**
     * Writing data to inaccessible properties is not allowed.
     *
     * @param string $name
     * @param mixed $value
     * @throws \BadMethodCallException
     * @codeCoverageIgnore
     */
    public function __set( $name, $value )
    {
        throw new \BadMethodCallException( 'Writing data to inaccessible properties is not allowed.' );
    }

    /**
     * Reading data from inaccessible properties is not allowed.
     *
     * @param string $name
     * @throws \BadMethodCallException
     * @codeCoverageIgnore
     */
    public function __get( $name )
    {
        throw new \BadMethodCallException( 'Reading data from inaccessible properties is not allowed.' );
    }

    /** Loarder section
     * **************** */

    /**
     * Registry of map files that have already been loaded
     * @var array
     */
    private $aMapsLoaded = [ ];

    /**
     * Class name/filename map
     * @var array
     */
    private $aMap = [ ];

    /**
     * Returns absolute path name.
     * Throws an exception if the file does not exist.
     *
     * @param string $path
     * @return string
     * @throws \InvalidArgumentException
     */
    private function getAbsolutePath( $path )
    {
        // The parameter should be a not empty string
        $sFile = ( is_string( $path ) ) ? trim( $path ) : '';

        // Check if the file exists and gets the absolute pathname
        $sPathname = file_exists( $sFile ) ? realpath( $sFile ) : FALSE;

        // The file does not exist
        if( FALSE === $sPathname )
        {
            throw new \InvalidArgumentException( sprintf( 'Map file provided does not exist: %s', $sFile ) );
        }

        return $sPathname;
    }

    /**
     * Loads the map from a file.
     * Throws an exception if the file does not exist or does not contain any map.
     *
     * @param string $path The file path.
     * @return void
     * @throws \InvalidArgumentException
     */
    private function loadFromFile( $path )
    {
        // Gets the absolute pathname
        $sPathname = $this->getAbsolutePath( $path );

        // Load the map if not already loaded
        if( !in_array( $sPathname, $this->aMapsLoaded ) )
        {
            $aMap = include( $sPathname );

            // Option should be an array
            if( !is_array( $aMap ) )
            {
                throw new \InvalidArgumentException( sprintf( 'The file does not contain map: %s', gettype( $aMap ) ) );
            }

            // Merge the map
            $this->aMap = array_merge( $this->aMap, $aMap );

            // Save the loaded file name
            $this->aMapsLoaded[] = $sPathname;
        }
    }

    /**
     * Configure the autoloader. Register an autoload map.
     *
     * @param array $options Array of options, where each option is either a filename returning a class map, or
     *                       an associative array of class name/filename pairs.
     *                       $options = array( __DIR__ . '/library/autoloader_classmap.php', // file-based class map
     *                                         array( 'Aa\Bb' => __DIR__ . '/Aa/Bb.php',     // array class map
     *                                         'Cc\Dd' => __DIR__ . '/Cc/Dd.php' ) );
     * @throws \Exception If something wrong occured.
     * @return void
     */
    public function setOptions( array $options )
    {
        foreach( $options as $option )
        {
            // Load the map from a file
            if( is_string( $option ) )
            {
                $this->loadFromFile( $option );
            }
            elseif( is_array( $option ) )
            {
                // Load the map from an array
                $this->aMap = array_merge( $this->aMap, $option );
            }
            else
            {
                throw new \InvalidArgumentException( sprintf( 'The option provided isnt valid: %s', gettype( $option ) ) );
            }
        }
    }

    /**
     * Attempts to load the class specified.
     * Returns a boolean FALSE on failure, or a string indicating the class loaded on success.
     *
     * @param   string $class
     * @return  mixed
     */
    public function autoload( $class )
    {
        $sClass = ( is_string( $class ) ) ? trim( $class ) : '';

        if( ( strlen( $sClass ) > 0 ) && isset( $this->aMap[$sClass] ) )
        {
            require_once $this->aMap[$sClass];
            $sReturn = $sClass;
        }
        else
        {
            $sReturn = FALSE;
        }

        return $sReturn;
    }

    /**
     * Register the autoloader with spl_autoload registry.
     *
     * @return void
     */
    public function register()
    {
        spl_autoload_register( [ $this, 'autoload' ], true, true );
    }

    /**
     * Retrieve current autoload map.
     *
     * @return array
     */
    public function getAutoloadMap()
    {
        return $this->aMap;
    }

}
