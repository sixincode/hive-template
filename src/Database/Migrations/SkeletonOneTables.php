<?php

namespace VendorName\Skeleton\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use VendorName\Skeleton\Traits\Database\SkeletonDatabaseDefinitions;

/**
 * @see \VendorName\Skeleton\Skeleton
 */
class SkeletonOneTables
{
  public static function up()
  {
      $tableNames  = config('skeleton.table_names');
      $columnNames = config('skeleton.column_names');

      if (empty($tableNames)) {
        throw new \Exception('Error: config/skeleton.php not loaded. Run [php artisan config:clear] and try again.');
      }
      if (empty($columnNames)) {
        throw new \Exception('Error: config/skeleton.php not loaded. Run [php artisan config:clear] and try again.');
      }

      // if(!Schema::hasTable($tableNames['skeleton'])) {
      //   Schema::create($tableNames['skeleton'], function (Blueprint $table) {
      //     $table->addSkeletonFields($table);
      //   });
      // }

  }

  public static function down()
  {
      $tableNames  = config('skeleton.table_names');
      $columnNames = config('skeleton.column_names');

      if (empty($tableNames)) {
        throw new \Exception('Error: config/skeleton.php not loaded. Run [php artisan config:clear] and try again.');
      }
      if (empty($columnNames)) {
        throw new \Exception('Error: config/skeleton.php not loaded. Run [php artisan config:clear] and try again.');
      }

      // Schema::dropIfExists($tableNames['skeleton']);
  }
}
