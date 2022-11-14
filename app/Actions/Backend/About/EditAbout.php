<?php

namespace App\Actions\Backend\About;

use App\Models\About;

class EditAbout
{
    public function handle($id)
    {
        $about = About::findorFail($id);
        return view('backend.about.edit_about', compact('about'));
    }
}