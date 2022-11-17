<?php

namespace App\Actions\Backend\About;

use App\Models\About;
use Illuminate\Support\Facades\Storage;
use Illuminate\Routing\Redirector;
use Illuminate\Http\RedirectResponse;
class DeleteAbout
{
    public function handle(int $id): Redirector|RedirectResponse
    {
        $about = About::findorFail($id);
        $img = $about->profile_photo;
        Storage::delete('/public/upload/photos/about/'.$img);
        $about->delete();
        $notification = [
            'message' => 'About Deleted Successfully',
            'alert-type' => 'danger'
        ];
        return redirect()->back()->with($notification);        
    }
}