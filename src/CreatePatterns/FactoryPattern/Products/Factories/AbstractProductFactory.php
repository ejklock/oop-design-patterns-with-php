<?php

namespace Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\Products\Factories;

use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\Products\Product;

abstract class AbstractProductFactory
{
    abstract public function createProduct(): Product;

    public function someOperation(): string
    {
        return 'some operation';
    }
}
