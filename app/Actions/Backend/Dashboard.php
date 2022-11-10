<?php

namespace App\Actions\Backend;

use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;

class Dashboard
{
    public function handle(): View|Factory
    {
        return view('backend.master');
    }
}