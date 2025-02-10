<?php

namespace ContainerTxVUtx8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPersonnageControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1JTT3Xa.App\Controller\PersonnageController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1JTT3Xa.App\\Controller\\PersonnageController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'personnageRepository' => ['privates', 'App\\Repository\\PersonnageRepository', 'getPersonnageRepositoryService', true],
            'user' => ['privates', '.errored..service_locator.1JTT3Xa.App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.1JTT3Xa": it needs an instance of "App\\Entity\\User" but this type has been excluded in "config/services.yaml".'],
        ], [
            'personnageRepository' => 'App\\Repository\\PersonnageRepository',
            'user' => 'App\\Entity\\User',
        ]))->withContext('App\\Controller\\PersonnageController::index()', $container);
    }
}
