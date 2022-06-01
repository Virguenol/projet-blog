<?php

namespace App\Core;

class FeuTricolor {


    public function __construct()
    {

    }
    public function couler(string $color)
    {
        if($color == "rouge")
        {
         $result = 'stop';
        }

        if($color == "vert")
        {
         $result = 'passer';
        }

        if($color == "orange")
        {
         $result = 'attension';
        }
        return $result;
    }
}
