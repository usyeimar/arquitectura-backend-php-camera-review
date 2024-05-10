<?php

namespace Yeima\CameraReview\Product\Lens;

interface ILens
{
    public function getName(): string;

    public function setName($name): void;

    public function getSKU(): string;

    public function setSKU($sku): void;


    public function getBrand(): string;
    public function setBrand($brand): void;

    public function getFeatures(): array;

    public function setFeatures($features): void;

    public function getContents(): array;


}