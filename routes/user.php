<?php

use Illuminate\Support\Facades\Route;
use VendorName\Skeleton\Http\Controllers\User as UserControllers;

Route::middleware(
  config('skeleton-middlewares.user', ['web','auth:web']),
)->name('user.')->prefix('home')->group(function () {
   // Route::get('/',  [UserControllers\Home\HomeUserController::class, 'userHome'])->name('home');
   // Route::get('/settings',  [UserControllers\Settings\SettingsUserController::class, 'userSettings'])->name('settings.index');
});
