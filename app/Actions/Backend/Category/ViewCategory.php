<?php

namespace App\Actions\Backend\Category;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;

class ViewCategory
{
    public function handle(): View|Factory
    {
        $categories = Category::orderBy('id', 'ASC')->get();
        return view('backend.category.category_view', compact('categories'));
    }
}