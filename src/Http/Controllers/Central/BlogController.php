<?php

namespace VendorName\Skeleton\Http\Controllers\Central;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function mainBlog()
    {
      return view('skeleton::central.blog.mainBlog');
    }
}
