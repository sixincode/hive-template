<?php

namespace VendorName\Skeleton\Traits\Database;

use VendorName\Skeleton\Database\Migrations as Migrations;

trait SkeletonMigrationsTrait
{
  public function migrateUp(): void
  {
    $this->migrateSkeletonOneUp();
    // $this->migrateSkeletonTwoUp();
    // $this->migrateSkeletonThreeUp();
  }

  public function migrateDown(): void
  {
    $this->migrateSkeletonOneDown();
    // $this->migrateSkeletonTwoDown();
    // $this->migrateSkeletonThreeDown();
  }

  public function migrateSkeletonOneUp(): void
  {
    $migration = new Migrations\SkeletonOneTables;
    $migration->up();
  }

  public function migrateSkeletonOneDown(): void
  {
    $migration = new Migrations\SkeletonOneTables;
    $migration->down();
  }
}
