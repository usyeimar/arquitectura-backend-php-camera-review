<?php

namespace Yeima\CameraReview\Product;

interface IProduct
{
    public function Name(): string;


    public function Manufacturer(): string;


    public function SKU(): string;


    /**
     * @return Feature[]
     */
    public function Features(): array;


    public function Content(): array;
}