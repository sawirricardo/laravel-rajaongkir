<?php

namespace Sawirricardo\Rajaongkir\Laravel;

use Sawirricardo\Rajaongkir\Laravel\Commands\RajaongkirCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasMigration('create_rajaongkir_table')
            ->hasCommand(RajaongkirCommand::class);
    }
}
