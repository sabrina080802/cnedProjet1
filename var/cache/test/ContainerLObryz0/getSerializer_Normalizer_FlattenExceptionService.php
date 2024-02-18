<?php

namespace ContainerLObryz0;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSerializer_Normalizer_FlattenExceptionService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'serializer.normalizer.flatten_exception' shared service.
     *
     * @return \Symfony\Component\Messenger\Transport\Serialization\Normalizer\FlattenExceptionNormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/ContextAwareNormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerAwareTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/Serialization/Normalizer/FlattenExceptionNormalizer.php';

        return $container->privates['serializer.normalizer.flatten_exception'] = new \Symfony\Component\Messenger\Transport\Serialization\Normalizer\FlattenExceptionNormalizer();
    }
}
