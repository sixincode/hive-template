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

  public function migrateUpAll(): void
  {
    \HiveAlpha::migrateUp();
    // \HiveStream::migrateUp();
    // \HivePosts::migrateUp();
    // \HiveCalendar::migrateUp();
    $this->migrateUp();
  }

  public function migrateDown(): void
  {
    $this->migrateSkeletonOneDown();
    // $this->migrateSkeletonTwoDown();
    // $this->migrateSkeletonThreeDown();
  }

  public function migrateDownAll(): void
  {
    // \HiveCalendar::migrateDown();
    // \HivePosts::migrateDown();
    // \HiveStream::migrateDown();
    \HiveAlpha::migrateDown();
    $this->migrateDown();
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
