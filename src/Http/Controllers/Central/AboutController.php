<?php

namespace VendorName\Skeleton\Http\Controllers\Central;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function mainAbout()
    {
      return view('skeleton::central.about.mainAbout');
    }
}
