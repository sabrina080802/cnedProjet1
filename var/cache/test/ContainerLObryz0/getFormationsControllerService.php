<?php

namespace ContainerLObryz0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFormationsControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Controller\FormationsController' shared autowired service.
     *
     * @return \App\Controller\FormationsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/FormationsController.php';

        $container->services['App\\Controller\\FormationsController'] = $instance = new \App\Controller\FormationsController(($container->privates['App\\Repository\\FormationRepository'] ?? $container->load('getFormationRepositoryService')), ($container->privates['App\\Repository\\CategorieRepository'] ?? $container->load('getCategorieRepositoryService')));

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\FormationsController', $container));

        return $instance;
    }
}
