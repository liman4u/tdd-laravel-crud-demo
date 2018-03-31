<?php
namespace App\Carousels\Repositories;

use App\Carousels\Carousel;
use App\Carousels\Exceptions\CreateCarouselErrorException;
use App\Carousels\Exceptions\CarouselNotFoundException;
use Illuminate\Database\QueryException;

class CarouselRepository
{
    /**
     * CarouselRepository constructor.
     * @param Carousel $carousel
     */
    public function __construct(Carousel $carousel)
    {
        $this->model = $carousel;
    }

    /**
     * @param array $data
     * @return Carousel
     * @throws CreateCarouselErrorException
     */
    public function createCarousel(array $data) : Carousel
    {
        try {
            return $this->model->create($data);
        } catch (QueryException $e) {
            throw new CreateCarouselErrorException($e);
        }
    }


    /**
     * @param int $id
     * @return Carousel
     * @throws CarouselNotFoundException
     */
    public function findCarousel(int $id) : Carousel
    {
        try {
            return $this->model->findOrFail($id);
        } catch (ModelNotFoundException $e) {
            throw new CarouselNotFoundException($e);
        }
    }

}
