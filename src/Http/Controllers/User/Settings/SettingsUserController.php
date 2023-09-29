<?php

namespace VendorName\Skeleton\Http\Controllers\User\Settings;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class SettingsUserController extends Controller
{
    public function userSettings()
    {
      return view('skeleton::user.settings.userSettings');
    }
}
