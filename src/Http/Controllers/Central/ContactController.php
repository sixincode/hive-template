<?php

namespace VendorName\Skeleton\Http\Controllers\Central;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function mainLanding()
    {
      return view('skeleton::central.contact.mainContact');
    }
}
