<?php

namespace Container6gEwx9N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Identifier_DateNormalizerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.identifier.date_normalizer' shared service.
     *
     * @return \ApiPlatform\Core\Identifier\Normalizer\DateTimeIdentifierDenormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Identifier'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'DateTimeIdentifierDenormalizer.php';

        return $container->privates['api_platform.identifier.date_normalizer'] = new \ApiPlatform\Core\Identifier\Normalizer\DateTimeIdentifierDenormalizer();
    }
}
