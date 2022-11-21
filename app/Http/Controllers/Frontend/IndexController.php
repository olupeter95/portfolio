<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function home()
    {
        $about = About::first();
        $user = User::first();
        return view('frontend.index', compact('about', 'user'));
    }
}
