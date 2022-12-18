<?php

namespace ContainerXOKB665;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebpackEncore_TagRendererService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'webpack_encore.tag_renderer' shared service.
     *
     * @return \Symfony\WebpackEncoreBundle\Asset\TagRenderer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'webpack-encore-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Asset'.\DIRECTORY_SEPARATOR.'TagRenderer.php';

        return $container->privates['webpack_encore.tag_renderer'] = new \Symfony\WebpackEncoreBundle\Asset\TagRenderer(($container->privates['webpack_encore.entrypoint_lookup_collection'] ?? $container->getWebpackEncore_EntrypointLookupCollectionService()), ($container->privates['assets.packages'] ?? $container->getAssets_PackagesService()), [], ['defer' => true], [], ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
