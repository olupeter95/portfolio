<?php

namespace App\Actions\Backend\About;

use Carbon\Carbon;
use App\Models\About;
use App\Http\Requests\AboutRequest;
use Intervention\Image\Facades\Image;

class CreateAbout
{
    public function handle(AboutRequest $request)
    {
        $file = $request->file('profile_photo');
        $img = Image::make($file);
        $img->resize(300,200);
        $name = $file->getClientOriginalName();
        $img->save('storage/upload/photos/about/'.$name);
        About::create([
            'title' => $request->title,
            'description' => $request->description,
            'profile_photo' => $name,
            'created_at' => Carbon::now(),
        ]);
        $notfication = [
            'message' => 'About Added Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notfication);
    }
}