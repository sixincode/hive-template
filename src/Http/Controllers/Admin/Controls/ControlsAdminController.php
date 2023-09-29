<?php

namespace VendorName\Skeleton\Http\Controllers\Admin\Controls;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class ControlsAdminController extends Controller
{
    public function adminControls()
    {
      return view('skeleton::admin.controls.adminControls');
    }
}
