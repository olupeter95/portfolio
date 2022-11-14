<?php

namespace App\Actions\Backend\About;

use App\Models\About;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;

class ViewAbout
{
    public function handle(): View|Factory
    {
        $about = About::latest()->get();
        return view('backend.about.about_view', compact('about'));
    }
}