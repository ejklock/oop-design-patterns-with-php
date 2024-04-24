<?php

namespace Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\Products\Factories;

use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\Products\Car;
use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\Products\Product;

class CarFactory extends AbstractProductFactory
{

    public function createProduct(): Product
    {

        return new Car();
    }
}
