<?php

namespace VendorName\Skeleton;

use VendorName\Skeleton\Traits\Database as DatabaseTrait;

class Skeleton
{
  use DatabaseTrait\SkeletonMigrationsTrait;
  use DatabaseTrait\SkeletonSeedersTrait;
}
