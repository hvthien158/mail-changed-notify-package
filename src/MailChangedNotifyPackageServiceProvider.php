<?php

namespace Thientra\MailChangedNotifyPackage;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Thientra\MailChangedNotifyPackage\Commands\MailChangedNotifyPackageCommand;

class MailChangedNotifyPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('mail-changed-notify-package')
            ->hasViews();
    }
}
