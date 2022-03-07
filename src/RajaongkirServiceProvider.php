<?php

namespace Sawirricardo\Rajaongkir\Laravel;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Sawirricardo\Rajaongkir\Laravel\Commands\RajaongkirCommand;

class RajaongkirServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-rajaongkir')
            ->hasConfigFile()
            ->hasMigration('create_laravel-rajaongkir_table')
            ->hasCommand(RajaongkirCommand::class);
    }
}
