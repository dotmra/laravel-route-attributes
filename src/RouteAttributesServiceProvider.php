<?php

namespace Dotmra\RouteAttributes;

use Dotmra\RouteAttributes\Commands\RouteAttributesCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class RouteAttributesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-route-attributes')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_route_attributes_table')
            ->hasCommand(RouteAttributesCommand::class);
    }
}
