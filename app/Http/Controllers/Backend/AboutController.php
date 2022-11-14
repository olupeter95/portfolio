<?php

namespace App\Http\Controllers\Backend;

use App\Actions\Backend\About\CreateAbout;
use App\Actions\Backend\About\EditAbout;
use App\Actions\Backend\About\UpdateAbout;
use App\Actions\Backend\About\ViewAbout;
use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Undocumented function
     *
     * @param ViewAbout $viewAbout
     * @return void
     */
    public function viewAbout(ViewAbout $viewAbout)
    {
        return $viewAbout->handle();
    }

    /**
     * Undocumented function
     *
     * @param AboutRequest $request
     * @param CreateAbout $createAbout
     * @return void
     */
    public function storeAbout(
        AboutRequest $request,
        CreateAbout $createAbout
    )
    {
        return $createAbout->handle($request);
    }

    /**
     * Undocumented function
     *
     * @param int $id
     * @param EditAbout $editAbout
     * @return void
     */
    public function editAbout(
        int $id,
        EditAbout $editAbout
    )
    {
        return $editAbout->handle($id);
    }

    public function updateAbout(
        AboutRequest $request,
        UpdateAbout $updateAbout
    )
    {
        $updateAbout->handle($request);
        $notification = [
            'message' => 'About Updated Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('about.view')->with($notification);
    }
}
