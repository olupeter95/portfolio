<?php

namespace App\Http\Controllers\Backend;

use App\Actions\Backend\Category\StoreCategory;
use App\Actions\Backend\Category\ViewCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Undocumented function
     *
     * @param ViewCategory $viewCategory
     * @return void
     */
    public function viewCategory(ViewCategory $viewCategory)
    {
        return $viewCategory->handle();
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @param StoreCategory $storeCategory
     * @return void
     */
    public function storeCategory(
        Request $request,
        StoreCategory $storeCategory
    )
    {
        return $storeCategory->handle($request);
    }
}
