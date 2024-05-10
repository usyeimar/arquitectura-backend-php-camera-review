<?php

namespace Yeima\CameraReview\Review;

use Yeima\CameraReview\Product\Product;

class Review implements IReview
{

    public function __construct(
        public string  $title,
        public string  $content,
        public string  $author,
        public Product $product
    )
    {
    }

    public function Title(): string
    {
        // TODO: Implement Title() method.
    }

    public function Content(): string
    {
        // TODO: Implement Content() method.
    }

    public function Author(): string
    {
        // TODO: Implement Author() method.
    }

    public function Product(): Product
    {
        // TODO: Implement Product() method.
    }
}