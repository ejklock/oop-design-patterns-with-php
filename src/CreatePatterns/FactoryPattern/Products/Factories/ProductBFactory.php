<?php

namespace Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\Products\Factories;

use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\Products\Product;
use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\Products\ProductB;

class ProductBFactory extends AbstractProductFactory
{

    public function createProduct(): Product
    {

        return new ProductB();
    }
}
