<?php

namespace Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\Products\Factories;

use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\Products\Product;
use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\Products\ProductA;

class ProductAFactory extends AbstractProductFactory
{

    public function createProduct(): Product
    {

        return new ProductA();
    }
}
