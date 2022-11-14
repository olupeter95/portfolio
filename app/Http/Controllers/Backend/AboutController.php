<?php

namespace App\Http\Controllers\Backend;

use App\Actions\Backend\About\CreateAbout;
use App\Actions\Backend\About\ViewAbout;
use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function viewAbout(ViewAbout $viewAbout)
    {
        return $viewAbout->handle();
    }

    public function storeAbout(
        AboutRequest $request,
        CreateAbout $createAbout
    )
    {
        return $createAbout->handle($request);
    }
}
