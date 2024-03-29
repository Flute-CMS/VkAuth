<?php

namespace Flute\Modules\VkAuth\ServiceProviders;

use Flute\Core\Support\ModuleServiceProvider;

class VkAuthServiceProvider extends ModuleServiceProvider
{
    public array $extensions = [];

    public function boot(\DI\Container $container): void
    {
        app()->getLoader()->addPsr4('Hybridauth\\Provider\\', module_path('VkAuth', 'Hybrid/'));
    }

    public function register(\DI\Container $container): void
    {
    }
}