<?php

namespace Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\Products;


class ProductA implements Product
{

    public function getName(): string
    {
        return 'ProductA';
    }
}
