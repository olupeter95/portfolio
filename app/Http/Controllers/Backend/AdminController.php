<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Actions\Backend\Dashboard;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard(Dashboard $dashboard)
    {
        return $dashboard->handle();
    }
}
