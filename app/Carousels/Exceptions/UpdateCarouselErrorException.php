<?php

namespace App\Carousels\Exceptions;


class UpdateCarouselErrorException extends \Exception
{
    /**
     * CustomerNotFoundException constructor.
     */
    public function __construct()
    {
        parent::__construct('Carousel not updated.');
    }
}
