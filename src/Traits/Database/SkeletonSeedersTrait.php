<?php

namespace VendorName\Skeleton\Traits\Database;

use VendorName\Skeleton\Database\Seeders as Seeders;

trait SkeletonSeedersTrait
{
  public function seedAll(): void
  {
    \HiveAlpha::seed();
    $thid->seed();
    // $thid->seedTwo();
    // $thid->seedthree();

  }

  public function seed(): void
  {
    $seeder = new Seeders\SkeletonOneDatabaseSeeder;
    $seeder->run();
  }

}
