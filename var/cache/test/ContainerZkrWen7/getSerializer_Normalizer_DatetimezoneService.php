<?php

namespace ContainerZkrWen7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSerializer_Normalizer_DatetimezoneService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'serializer.normalizer.datetimezone' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DateTimeZoneNormalizer.php';

        return $container->privates['serializer.normalizer.datetimezone'] = new \Symfony\Component\Serializer\Normalizer\DateTimeZoneNormalizer();
    }
}
