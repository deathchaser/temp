<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class RestLoginController
 * @package AppBundle\Controller
 *
 * @RouteResource("login", pluralize=false)
 */
class RestLoginController extends FOSRestController implements ClassResourceInterface
{
    public function getAction() {
        throw new \DomainException('something went horribly wrong');
    }
}
