<?php
require __DIR__ . '/../vendor/autoload.php';


use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\SocialNetwork\SocialNetwork;
use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\SocialNetwork\SocialNetworks\Facebook\FacebookPoster;
use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\SocialNetwork\SocialNetworks\Linkedin\LinkedinPoster;

SocialNetwork::postOnSocialNetwork(new FacebookPoster());
SocialNetwork::postOnSocialNetwork(new LinkedinPoster());
