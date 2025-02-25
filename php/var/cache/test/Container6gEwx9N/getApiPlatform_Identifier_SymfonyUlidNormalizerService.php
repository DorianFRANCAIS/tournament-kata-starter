<?php

namespace Container6gEwx9N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Identifier_SymfonyUlidNormalizerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.identifier.symfony_ulid_normalizer' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Identifier\Normalizer\UlidNormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Bridge'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'Identifier'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'UlidNormalizer.php';

        return $container->privates['api_platform.identifier.symfony_ulid_normalizer'] = new \ApiPlatform\Core\Bridge\Symfony\Identifier\Normalizer\UlidNormalizer();
    }
}
