<?php

namespace Frnwtr\TUIGridWire;

use Frnwtr\TUIGridWire\Commands\TUIGridWireCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TUIGridWireServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('tui-grid-wire')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_tui-grid-wire_table')
            ->hasCommand(TUIGridWireCommand::class);
    }
}
