<?php

namespace ContainerJxRw8HE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5xO7JFGService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5xO7JFG' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5xO7JFG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'readingTimeCalculator' => ['privates', 'App\\Service\\ReadingTimeCalculator', NULL, 'Cannot autowire service "App\\Service\\ReadingTimeCalculator": argument "$wordsPerMinute" of method "__construct()" is type-hinted "int", you should configure its value explicitly.'],
        ], [
            'readingTimeCalculator' => 'App\\Service\\ReadingTimeCalculator',
        ]);
    }
}
