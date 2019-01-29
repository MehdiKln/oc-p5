<?php

namespace App\Controllers;

class Controller
{
    protected $container;

    public function __construct($container)
    {
        $this->container = $container;
    }

    public function __get($property)
    {
        if ($this->container->{$property}) {
            return $this->container->{$property};
        }
    }

    public function redirect($response, $name) {
        
        return $response->withStatus(302)->withHeader('Location', $this->router->pathFor($name));
    }

    public function mailer(): \Swift_Mailer {
        return $this->container->mailer;
    }
}
