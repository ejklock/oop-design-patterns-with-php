<?php

namespace Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\Products;

use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\Products\Factories\AbstractProductFactory;

class ProductApplication
{
    private AbstractProductFactory $productFactory;
    public function __construct(AbstractProductFactory $productFactory)
    {
        $this->productFactory = $productFactory;
    }

    public function createProduct(): Product
    {
        return $this->productFactory->createProduct();
    }

    public function getProductName(): string
    {
        return $this->productFactory->createProduct()->getName();
    }
}
