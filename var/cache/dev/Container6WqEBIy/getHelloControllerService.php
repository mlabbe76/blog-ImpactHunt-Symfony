<?php

namespace Container6WqEBIy;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHelloControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\HelloController' shared autowired service.
     *
     * @return \App\Controller\HelloController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'HelloController.php';

        return $container->services['App\\Controller\\HelloController'] = new \App\Controller\HelloController();
    }
}
