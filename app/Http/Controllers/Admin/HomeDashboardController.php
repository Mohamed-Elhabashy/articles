<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class HomeDashboardController extends Controller
{
    public function index()
    {
        return View('Admin.index');
    }
}
