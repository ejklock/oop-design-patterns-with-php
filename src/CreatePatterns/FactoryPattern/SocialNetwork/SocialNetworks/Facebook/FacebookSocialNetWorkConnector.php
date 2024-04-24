<?php

namespace Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\SocialNetwork\SocialNetworks\Facebook;

use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\SocialNetwork\Interfaces\SocialNetWorkConnector;

class FacebookSocialNetWorkConnector implements SocialNetWorkConnector
{

    public function login(): void
    {
        print_r('Login with Facebook' . PHP_EOL);
    }

    public function logout(): void
    {
        print_r('Logout with Facebook' . PHP_EOL);
    }

    public function post(string $content): void
    {
        print_r('Post with Facebook: ' . $content . PHP_EOL);
    }
}
