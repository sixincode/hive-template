<?php

namespace VendorName\Skeleton\Http\Controllers\User\Home;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class HomeUserController extends Controller
{
    public function userHome()
    {
      return view('skeleton::user.home.userHome');
    }
}
