<?php

namespace Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\SocialNetwork;

use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\SocialNetwork\Factories\SocialNetWorkPoster;

class SocialNetwork
{
    public static function postOnSocialNetwork(SocialNetWorkPoster $socialNetWorkPoster): void
    {
        $socialNetWorkPoster->post('some content');
    }
}
