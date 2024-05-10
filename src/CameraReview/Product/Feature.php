<?php

namespace Yeima\CameraReview\Product;

class Feature
{
    public function __construct(
        public string $name,
        public string $description,
    )
    {
    }
}