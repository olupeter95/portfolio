<?php

namespace App\Actions\Backend\About;

use Carbon\Carbon;
use App\Models\About;
use App\Http\Requests\AboutRequest;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class UpdateAbout
{
    public function handle(AboutRequest $request): About
    {
        $id = $request->id;
        $old_image = $request->old_image;
        $file = $request->file('profile_photo');
        if($file){
            Storage::delete('/public/upload/photos/about/'.$old_image);
            $img = Image::make($file)->resize(300,200);
            $name = $file->getClientOriginalName();
            $img->save('storage/upload/photos/about/'.$name);

            return About::findorFail($id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'profile_photo' => $name,
                'created_at' => Carbon::now(),
            ]);
        }
            return About::findorFail($id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'created_at' => Carbon::now(),
            ]);
        
    }
}
    