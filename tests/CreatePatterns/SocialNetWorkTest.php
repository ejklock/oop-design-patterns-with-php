<?php

namespace Ejklock\ProjectPatternsTest\CreatePatterns;

use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\SocialNetwork\SocialNetwork;
use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\SocialNetwork\SocialNetworks\Facebook\FacebookPoster;
use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\SocialNetwork\SocialNetworks\Linkedin\LinkedinPoster;
use PHPUnit\Framework\TestCase;

class SocialNetWorkTest extends TestCase
{


    public function testSocialNetWorkPoster()
    {
        SocialNetwork::postOnSocialNetwork(new FacebookPoster());
        SocialNetwork::postOnSocialNetwork(new LinkedinPoster());
    }
}
