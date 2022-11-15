<?php

namespace App\Http\Controllers\Backend;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Requests\AboutRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Actions\Backend\About\EditAbout;
use App\Actions\Backend\About\ViewAbout;
use App\Actions\Backend\About\CreateAbout;
use App\Actions\Backend\About\DeleteAbout;
use App\Actions\Backend\About\UpdateAbout;

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

    /**
     * Undocumented function
     *
     * @param AboutRequest $request
     * @param UpdateAbout $updateAbout
     * @return void
     */
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

    public function deleteAbout(
        int $id,
        DeleteAbout $deleteAbout
    )
    {
        return $deleteAbout->handle($id);    
    }
}
