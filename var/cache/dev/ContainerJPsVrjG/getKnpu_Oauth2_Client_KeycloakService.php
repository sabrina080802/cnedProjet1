<?php

namespace ContainerJPsVrjG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpu_Oauth2_Client_KeycloakService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'knpu.oauth2.client.keycloak' shared service.
     *
     * @return \KnpU\OAuth2ClientBundle\Client\Provider\KeycloakClient
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/knpuniversity/oauth2-client-bundle/src/Client/OAuth2ClientInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knpuniversity/oauth2-client-bundle/src/Client/OAuth2Client.php';
        include_once \dirname(__DIR__, 4).'/vendor/knpuniversity/oauth2-client-bundle/src/Client/Provider/KeycloakClient.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-client/src/Tool/ArrayAccessorTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-client/src/Tool/GuardedPropertyTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-client/src/Tool/QueryBuilderTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-client/src/Provider/AbstractProvider.php';
        include_once \dirname(__DIR__, 4).'/vendor/league/oauth2-client/src/Tool/BearerAuthorizationTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/stevenmaguire/oauth2-keycloak/src/Provider/Keycloak.php';
        include_once \dirname(__DIR__, 4).'/vendor/knpuniversity/oauth2-client-bundle/src/DependencyInjection/ProviderFactory.php';

        return $container->services['knpu.oauth2.client.keycloak'] = new \KnpU\OAuth2ClientBundle\Client\Provider\KeycloakClient((new \KnpU\OAuth2ClientBundle\DependencyInjection\ProviderFactory(($container->services['router'] ?? $container->getRouterService())))->createProvider('Stevenmaguire\\OAuth2\\Client\\Provider\\Keycloak', ['clientId' => $container->getEnv('KEYCLOAK_CLIENTID'), 'clientSecret' => $container->getEnv('KEYCLOAK_SECRET'), 'authServerUrl' => $container->getEnv('KEYCLOAK_APP_URL'), 'realm' => 'mediatekformation', 'encryptionAlgorithm' => NULL, 'encryptionKeyPath' => NULL, 'encryptionKey' => NULL], 'oauth_check', [], []), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
