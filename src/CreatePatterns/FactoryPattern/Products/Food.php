<?php

namespace Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\Products;


class Food implements Product
{
    public function getName(): string
    {
        return 'Food';
    }
}
