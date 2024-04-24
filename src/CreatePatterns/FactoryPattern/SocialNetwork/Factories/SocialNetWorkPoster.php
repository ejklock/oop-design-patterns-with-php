<?php

namespace Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\SocialNetwork\Factories;

use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\SocialNetwork\Interfaces\SocialNetWorkConnector;

abstract class SocialNetWorkPoster
{
    abstract public function getSocialNetWorkConnector(): SocialNetWorkConnector;

    public function post(string $content): void
    {
        $network = $this->getSocialNetWorkConnector();
        $network->login();
        $network->post($content);
        $network->logout();
    }
}
