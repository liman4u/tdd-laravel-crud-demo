<?php

namespace App\Carousels\Exceptions;


class CarouselNotFoundException extends \Exception
{
    /**
     * CustomerNotFoundException constructor.
     */
    public function __construct()
    {
        parent::__construct('Carousel not found.');
    }
}
