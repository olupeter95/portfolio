<?php

namespace App\Actions\Backend\Category;

use Carbon\Carbon;
use App\Models\Category;
use Illuminate\Http\Request;

class StoreCategory
{
    public function handle(Request $request)
    {
        Category::create([
            'name' => $request->name,
            'created_at' => Carbon::now(),
        ]);
        $notification = [
            'message' => 'Category Added Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }
}