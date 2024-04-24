<?php

namespace Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\SocialNetwork\SocialNetworks\Linkedin;

use Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\SocialNetwork\Interfaces\SocialNetWorkConnector;

class LinkedinSocialNetWorkConnector implements SocialNetWorkConnector
{

    public function login(): void
    {
        print_r('Login with Linkedin' . PHP_EOL);
    }

    public function logout(): void
    {
        print_r('Logout with Linkedin' . PHP_EOL);
    }

    public function post(string $content): void
    {
        print_r('Post with Linkedin: ' . $content . PHP_EOL);
    }
}
