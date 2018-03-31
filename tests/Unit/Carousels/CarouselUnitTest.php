<?php

namespace Tests\Unit\Carousels;

use Tests\TestCase;
use App\Carousels\Carousel;
use App\Carousels\Repositories\CarouselRepository;

class CarouselUnitTest extends TestCase
{
    /** @test */
    public function it_can_create_a_carousel()
    {
        $data = [
            'title' => $this->faker->word,
            'link' => $this->faker->url,
            'src' => $this->faker->url,
        ];

        $carouselRepo = new CarouselRepository(new Carousel);
        $carousel = $carouselRepo->createCarousel($data);

        $this->assertInstanceOf(Carousel::class, $carousel);
        $this->assertEquals($data['title'], $carousel->title);
        $this->assertEquals($data['link'], $carousel->link);
        $this->assertEquals($data['image_src'], $carousel->src);
    }
}
