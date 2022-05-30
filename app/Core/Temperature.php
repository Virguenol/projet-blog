<?php

namespace App\Core;

use phpDocumentor\Reflection\Types\Boolean;

use function PHPUnit\Framework\returnSelf;
<<<<<<< HEAD

/**
 * @FIXME :
 *
 * 1 - Missing doc block for class and methods
 * 2 - missing return type in convert method
 * 3 - Code is not well formatted
 */

class Temperature
{
    /**
     * The authorized formats
     *
     * @var array
     */
    protected $authorizedFormat = ['°', 'F'];


=======
/**
 * @author Archange <vieguenolngot@email.com>
 *
 * class
 */
class Temperature
{
    /**
     * The class constructor
     */
>>>>>>> a05477f (ajout des commentaire)
    public function __construct()
    {

    }
    /**
     * Temperature format validation function
     *
     * @param string $format
     */
    public function validate(string $format): bool
    {
        if ($format == '°' || $format == 'F') {
            return true;
        } else {
            return false;
        }
<<<<<<< HEAD

        // More elegant the you can add method getAutorizedFormat
        // to be use by the class and display the required format
        // return in_array($format, $this->authorizedFormat);
=======
>>>>>>> a05477f (ajout des commentaire)
    }
    /**
     * Temperature conversion function
     *
     * @param float $value
     * @param string $format
     */
    public function convert(float $value, string $format):float
    {
        // correct format code space after if
        if($format == 'F') {
         return $value = ($value * 1.8) + 32;
        }
        // correct format code space between numbers operations
        if($format == '°') {
            return $value = ($value - 32) * 5/9;
        }
    }
}
