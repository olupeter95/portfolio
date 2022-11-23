<?php

namespace App\Actions\Backend\Category;

use App\Models\Category;
use Illuminate\Routing\Redirector;
use Illuminate\Http\RedirectResponse;

class DeleteCategory
{
    public function handle(int $id): Redirector|RedirectResponse
    {
        Category::findorFail($id)->delete();
        $notification = [
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'danger',
        ];
        return redirect()->back()->with($notification);
    }
}