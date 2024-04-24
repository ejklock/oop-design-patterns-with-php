<?php

namespace Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\SocialNetwork\SocialNetworks\Facebook;

use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\SocialNetwork\Factories\SocialNetWorkPoster;
use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\SocialNetwork\Interfaces\SocialNetWorkConnector;

class FacebookPoster extends SocialNetWorkPoster
{

    public function getSocialNetWorkConnector(): SocialNetWorkConnector
    {
        return new FacebookSocialNetWorkConnector();
    }
}
