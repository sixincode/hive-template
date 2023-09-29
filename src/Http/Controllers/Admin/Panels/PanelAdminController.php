<?php

namespace VendorName\Skeleton\Http\Controllers\Admin\Panels;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class PanelAdminController extends Controller
{
    public function adminPanel()
    {
      return view('skeleton::admin.panels.adminPanels');
    }
}
