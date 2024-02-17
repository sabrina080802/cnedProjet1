<?php

namespace ContainerJPsVrjG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DMff3D3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dMff3D3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dMff3D3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminCategoryController::addCategory' => ['privates', '.service_locator.t4pH54g', 'get_ServiceLocator_T4pH54gService', true],
            'App\\Controller\\FormationsController::delete' => ['privates', '.service_locator.Y6JER91', 'get_ServiceLocator_Y6JER91Service', true],
            'App\\Controller\\OAuthController::connectCheckAction' => ['privates', '.service_locator.r2De49f', 'get_ServiceLocator_R2De49fService', true],
            'App\\Controller\\OAuthController::index' => ['privates', '.service_locator.r2De49f', 'get_ServiceLocator_R2De49fService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\AdminCategoryController:addCategory' => ['privates', '.service_locator.t4pH54g', 'get_ServiceLocator_T4pH54gService', true],
            'App\\Controller\\FormationsController:delete' => ['privates', '.service_locator.Y6JER91', 'get_ServiceLocator_Y6JER91Service', true],
            'App\\Controller\\OAuthController:connectCheckAction' => ['privates', '.service_locator.r2De49f', 'get_ServiceLocator_R2De49fService', true],
            'App\\Controller\\OAuthController:index' => ['privates', '.service_locator.r2De49f', 'get_ServiceLocator_R2De49fService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\AdminCategoryController::addCategory' => '?',
            'App\\Controller\\FormationsController::delete' => '?',
            'App\\Controller\\OAuthController::connectCheckAction' => '?',
            'App\\Controller\\OAuthController::index' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AdminCategoryController:addCategory' => '?',
            'App\\Controller\\FormationsController:delete' => '?',
            'App\\Controller\\OAuthController:connectCheckAction' => '?',
            'App\\Controller\\OAuthController:index' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
