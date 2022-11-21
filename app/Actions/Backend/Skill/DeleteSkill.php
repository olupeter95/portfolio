<?php

namespace App\Actions\Backend\Skill;

use App\Models\Skill;

class DeleteSkill
{
    public function handle(int $id)
    {
        Skill::findorFail($id)->delete();
        $notification = [
            'message' => 'Skill Deleted Successfully',
            'alaert-type' => 'danger',
        ];
        return redirect()->back()->with($notification);
    }
}