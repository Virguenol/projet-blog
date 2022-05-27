<?php

namespace App\Core;

use phpDocumentor\Reflection\Types\Boolean;

use function PHPUnit\Framework\returnSelf;

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


    public function __construct()
    {

    }

    public function validate(string $format): bool
    {
       // $format = true;

        if ($format == '°' || $format == 'F') {
            return true;
        } else {
            return false;
        }

        // More elegant the you can add method getAutorizedFormat
        // to be use by the class and display the required format
        // return in_array($format, $this->authorizedFormat);
    }

    public function convert(float $value, string $format)
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
