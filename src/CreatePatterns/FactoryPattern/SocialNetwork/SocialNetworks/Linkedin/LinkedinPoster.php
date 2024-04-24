<?php

namespace Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\SocialNetwork\SocialNetworks\Linkedin;

use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\SocialNetwork\Factories\SocialNetWorkPoster;
use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\SocialNetwork\Interfaces\SocialNetWorkConnector;

class LinkedinPoster extends SocialNetWorkPoster
{

    public function getSocialNetWorkConnector(): SocialNetWorkConnector
    {
        return new LinkedinSocialNetWorkConnector();
    }
}
