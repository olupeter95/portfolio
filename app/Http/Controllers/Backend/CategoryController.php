<?php

namespace App\Http\Controllers\Backend;

use App\Actions\Backend\Category\EditCategory;
use App\Actions\Backend\Category\StoreCategory;
use App\Actions\Backend\Category\UpdateCategory;
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

    /**
     * Undocumented function
     *
     * @param int $id
     * @param EditCategory $editCategory
     * @return void
     */
    public function editCategory(
        int $id,
        EditCategory $editCategory
    )
    {
        return $editCategory->handle($id);
    }

    public function updateCategory(
        Request $request,
        UpdateCategory $updateCategory
    )
    {
        return $updateCategory->handle($request);
    }
}
