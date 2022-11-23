<?php

namespace App\Actions\Backend\Category;

use App\Models\Category;

class EditCategory
{
    public function handle(int $id)
    {
        $category = Category::findorFail($id);
        return view('backend.category.category_edit', compact('category'));
    }
}