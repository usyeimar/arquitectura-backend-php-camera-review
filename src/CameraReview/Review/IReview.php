<?php

namespace Yeima\CameraReview\Review;

use Yeima\CameraReview\Product\Product;
use Yeima\Review\Pro;

interface IReview
{

    public function Title(): string;

    public function Content(): string;

    public function Author(): string;

    public function Product(): Product;

}