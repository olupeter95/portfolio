<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Actions\Backend\Skill\EditSkill;
use App\Actions\Backend\Skill\ViewSkill;
use App\Actions\Backend\Skill\StoreSkill;
use App\Actions\Backend\Skill\DeleteSkill;
use App\Actions\Backend\Skill\UpdateSkill;

class SkillController extends Controller
{
    /**
     * Undocumented function
     *
     * @param ViewSkill $viewSkill
     * @return void
     */
    public function viewSkill(ViewSkill $viewSkill)
    {
        return $viewSkill->handle();
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @param StoreSkill $storeSkill
     * @return void
     */
    public function storeSkill(
        Request $request,
        StoreSkill $storeSkill
    )
    {
        return $storeSkill->handle($request);
    }

    /**
     * Undocumented function
     *
     * @param int $id
     * @param EditSkill $editSkill
     * @return void
     */
    public function editSkill(
        int $id,
        EditSkill $editSkill
    )
    {
        return $editSkill->handle($id);
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @param UpdateSkill $updateSkill
     * @return void
     */
    public function updateSkill(
        Request $request,
        UpdateSkill $updateSkill,
    )
    {
        return $updateSkill->handle($request);
    }

    /**
     * Undocumented function
     *
     * @param int $id
     * @param DeleteSkill $deleteSkill
     * @return void
     */
    public function deleteSkill(
        int $id,
        DeleteSkill $deleteSkill
    )
    {
        return $deleteSkill->handle($id);
    }
}
