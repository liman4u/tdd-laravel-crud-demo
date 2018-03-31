<?php

namespace App\Carousels\Exceptions;


class CreateCarouselErrorException extends \Exception
{
    /**
     * CustomerNotFoundException constructor.
     */
    public function __construct()
    {
        parent::__construct('Carousel not created.');
    }
}
