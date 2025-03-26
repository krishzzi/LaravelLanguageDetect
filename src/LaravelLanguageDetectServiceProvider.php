<?php

namespace Krishzzi\LaravelLanguageDetect;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Krishzzi\LaravelLanguageDetect\Commands\LaravelLanguageDetectCommand;

class LaravelLanguageDetectServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-language-detect')
            ->hasConfigFile()
            ->hasViews()
            ->hasCommand(LaravelLanguageDetectCommand::class);
    }
}
