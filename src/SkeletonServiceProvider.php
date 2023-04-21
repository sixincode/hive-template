<?php

namespace VendorName\Skeleton;

use Sixincode\ModulesInit\Package;
use Sixincode\ModulesInit\PackageServiceProvider;
use VendorName\Skeleton\Commands\SkeletonCommand;
use Illuminate\Support\Facades\Blade;
use Livewire\Livewire;

class SkeletonServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/sixincode/hive-template
         */
        $package
            ->name('skeleton')
            ->hasConfigFile(['skeleton'])
            ->hasViews()
            ->hasAssets()
            ->hasTranslations()
            // ->hasBladeComponents()
            // ->hasLayouts()
            ->hasRoutes(['web'])
            ->hasMigration('create_skeleton_table')
            // ->runsMigrations()
            ->hasCommand(SkeletonCommand::class);
    }
}
