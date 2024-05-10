<?php

namespace Yeima\CameraReview\Product\Camera;

use Yeima\CameraReview\Product\IProduct;

interface ICamera extends IProduct
{
    public function MaxISO() : int;

    public function Type() : string;

    public function CropFactor() : int;
}