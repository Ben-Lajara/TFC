<?php

namespace ContainerHjwniMu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserAdminTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\UserAdminType' shared autowired service.
     *
     * @return \App\Form\UserAdminType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\UserAdminType'] = new \App\Form\UserAdminType();
    }
}
