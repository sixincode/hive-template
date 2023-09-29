<?php

namespace VendorName\Skeleton\Traits\Database;

use VendorName\Skeleton\Database\Seeders as Seeders;

trait SkeletonSeedersTrait
{
  public function seed(): void
  {
    $thid->seedOne();
    // $thid->seedTwo();
    // $thid->seedthree();

  }

  public function seedOne(): void
  {
    $seeder = new Seeders\SkeletonOneDatabaseSeeder;
    $seeder->run();
  }

}
