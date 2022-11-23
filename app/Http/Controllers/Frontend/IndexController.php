<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Skill;

class IndexController extends Controller
{
    public function home()
    {
        $about = About::first();
        $user = User::first();
        $skills = Skill::orderBy('name', 'DESC')->get();
        return view('frontend.index', compact('about', 'user', 'skills'));
    }
}
