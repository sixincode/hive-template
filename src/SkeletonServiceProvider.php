<?php

namespace VendorName\Skeleton;

use Sixincode\ModulesInit\Package;
use Sixincode\ModulesInit\PackageServiceProvider;
use VendorName\Skeleton\Commands\SkeletonCommand;
use Illuminate\Support\Facades\Blade;
use Livewire\Livewire;
use VendorName\Skeleton\Traits\Database as DatabaseTraits;
use Illuminate\Database\Schema\Blueprint;

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
            ->hasConfigFile(['skeleton','skeleton-components','skeleton-layouts','skeleton-middlewares'])
            ->hasViews()
            ->hasAssets()
            ->hasTranslations()
            ->hasBladeComponents()
            // ->hasLayouts()
            // ->hasIcons()
            ->hasRoutes(['web','api','admin','user'])
            ->hasMigration('create_skeleton_table')
            // ->runsMigrations()
            ->hasCommand(SkeletonCommand::class);

            // $this->registerskeletonDatabaseMethods();
    }

    // private function registerskeletonDatabaseMethods(): void
    // {
    //   Blueprint::macro('addSkeletonFields', function (Blueprint $table, $properties = []) {
    //     DatabaseTraits\SkeletonDatabaseDefinitions::addSkeletonFields($table, $properties);
    //   });
    // }
}
