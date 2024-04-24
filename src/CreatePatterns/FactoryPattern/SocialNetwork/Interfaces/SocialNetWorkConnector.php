<?php

namespace Ejklock\ProjectPatterns\CreatePatterns\FactoryPattern\SocialNetwork\Interfaces;

interface SocialNetWorkConnector
{

    public function login(): void;

    public function logout(): void;

    public function post(string $content): void;
}
