<?php

namespace Container6gEwx9N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTest_ApiPlatform_ClientService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'test.api_platform.client' service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\Test\Client
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-client-contracts'.\DIRECTORY_SEPARATOR.'HttpClientInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-client'.\DIRECTORY_SEPARATOR.'HttpClientTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Bridge'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'Test'.\DIRECTORY_SEPARATOR.'Client.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'browser-kit'.\DIRECTORY_SEPARATOR.'AbstractBrowser.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'HttpKernelBrowser.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'KernelBrowser.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'browser-kit'.\DIRECTORY_SEPARATOR.'History.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'browser-kit'.\DIRECTORY_SEPARATOR.'CookieJar.php';

        $container->factories['test.api_platform.client'] = function () use ($container) {
            return new \ApiPlatform\Core\Bridge\Symfony\Bundle\Test\Client(new \Symfony\Bundle\FrameworkBundle\KernelBrowser(($container->services['kernel'] ?? $container->get('kernel', 1)), [], (new \Symfony\Component\BrowserKit\History()), (new \Symfony\Component\BrowserKit\CookieJar())));
        };

        return $container->factories['test.api_platform.client']();
    }
}
