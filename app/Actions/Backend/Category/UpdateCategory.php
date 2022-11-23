<?php

namespace App\Actions\Backend\Category;

use Carbon\Carbon;
use App\Models\Category;
use Illuminate\Http\Request;

class UpdateCategory
{
    public function handle(Request $request)
    {
        $id = $request->id;
        Category::FindorFail($id)->update([
            'name' => $request->name,
            'created_at' => Carbon::now(),
        ]);
        $notification = [
            'message' => 'Category Updated Successfully',
            'alert-type' => 'success',
        ];
        return to_route('category.view')->with($notification);
    }
}