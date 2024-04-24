<?php

namespace Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\Products\Factories;

use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\Products\Food;
use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\Products\Product;

class FoodFactory extends AbstractProductFactory
{

    public function createProduct(): Product
    {

        return new Food();
    }
}
