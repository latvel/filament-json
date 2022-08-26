<?php

namespace Latvel\FilamentJson;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentJsonServiceProvider extends PluginServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-json')
            ->hasViews();
    }
}
