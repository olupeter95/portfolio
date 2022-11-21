<?php

namespace App\Actions\Backend\Skill;

use Carbon\Carbon;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class UpdateSkill
{
    public function handle(Request $request): RedirectResponse
    {
        $id = $request->id;
        Skill::findorFail($id)->update([
            'name' => $request->name,
            'level' => $request->level,
            'created_at' => Carbon::now(),
        ]);
        $notification = [
            'message' => 'Skill Updated Successfully',
            'alert-type' => 'success',
        ];
        return to_route('skill.view')->with($notification);
    }
}