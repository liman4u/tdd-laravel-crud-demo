<?php
namespace App\Carousels\Repositories;

use App\Carousels\Carousel;
use App\Carousels\Exceptions\CreateCarouselErrorException;
use App\Carousels\Exceptions\CarouselNotFoundException;
use App\Carousels\Exceptions\UpdateCarouselErrorException;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\ModelNotFoundException;


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

    /**
     * @param array $data
     * @return bool
     * @throws UpdateCarouselErrorException
     */
    public function updateCarousel(array $data) : bool
    {
        try {
            return $this->model->update($data);
        } catch (QueryException $e) {
            throw new UpdateCarouselErrorException($e);
        }
    }


    /**
   * @return bool
   */
   public function deleteCarousel() : ?bool
   {
       return $this->model->delete();
   }

}
