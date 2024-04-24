<?php

namespace Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\Products;


class Car implements Product
{
    public function getName(): string
    {
        return 'Car';
    }
}
