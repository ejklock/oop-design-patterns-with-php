<?php

namespace Ejklock\ProjectPatternsTest\CreatePatterns;

use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\Products\Factories\FoodFactory;
use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\Products\Factories\ProductAFactory;
use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\Products\Factories\ProductBFactory;
use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\Products\Food;
use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\Products\ProductA;
use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\Products\ProductApplication;
use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\Products\ProductB;
use PHPUnit\Framework\TestCase;

class ProductApplicationTest extends TestCase
{

    public function testProductApplication()
    {

        $productA = (new ProductApplication(new ProductAFactory()))->createProduct();

        $productB = (new ProductApplication(new ProductBFactory()))->createProduct();

        $this->assertInstanceOf(ProductA::class, $productA);
        $this->assertInstanceOf(ProductB::class, $productB);
    }

    public function testProductApplicationProductName()
    {

        $productA =  (new ProductApplication(new ProductAFactory()))->createProduct();
        $productB =  (new ProductApplication(new ProductBFactory()))->createProduct();

        $this->assertEquals('ProductA', $productA->getName());
        $this->assertEquals('ProductB', $productB->getName());
    }

    public function testFoodApplicationFactory()
    {

        $food =  (new ProductApplication(new FoodFactory()))->createProduct();
        $this->assertInstanceOf(Food::class, $food);
    }
}
