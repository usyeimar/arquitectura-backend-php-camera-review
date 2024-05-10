<?php

namespace CameraReview\Product;


use PHPUnit\Framework\TestCase;
use Yeima\CameraReview\Product\Product;

final class ProductTest extends TestCase
{

    public function test_product_should_return_content_success(): void
    {

        // setup
        $product = new Product(name: "Canon EOS R5", manufacturer: "Canon", sku: "123456", features: ["8K Video", "45MP Sensor"]);

        // exec
        $content = $product->Content();

        // assert
        $this->assertNotEmpty($content, "Should return content but obtained null or whitespace.");

    }

    public function test_product_should_return_content_with_correct_values(): void
    {

        // setup
        $product = new Product(
            name: "Canon EOS R5",
            manufacturer: "Canon",
            sku: "123456",
            features: ["8K Video", "45MP Sensor"]
        );

        // exec
        $content = $product->Content();

        // assert
        $this->assertEquals("Canon EOS R5", $content["name"], "Should return Canon EOS R5 as name.");
        $this->assertEquals("Canon", $content["manufacturer"], "Should return Canon as manufacturer.");
        $this->assertEquals("123456", $content["sku"], "Should return 123456 as sku.");
        $this->assertContains("8K Video", $content["features"], "Should return 8K Video as feature.");
        $this->assertContains("45MP Sensor", $content["features"], "Should return 45MP Sensor as feature.");

    }

}