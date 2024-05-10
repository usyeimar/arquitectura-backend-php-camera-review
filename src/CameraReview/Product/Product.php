<?php

namespace Yeima\CameraReview\Product;

class Product implements IProduct
{

    public function __construct(
        private string $name,
        private string $manufacturer,
        private string $sku,
        private array  $features
    )
    {
    }

    public function Name(): string
    {
        return $this->name;
    }

    public function Manufacturer(): string
    {
        return $this->manufacturer;
    }

    public function SKU(): string
    {
        return $this->sku;
    }

    public function Features(): array
    {
        return $this->features;
    }

    /**
     * Get the content of the product
     * @return array
     */
    public function Content(): array
    {
        return [
            "name" => $this->Name(),
            "manufacturer" => $this->Manufacturer(),
            "sku" => $this->SKU(),
            "features" => $this->Features()
        ];
    }
}