<?php

namespace App\Actions\Backend\Skill;

use Carbon\Carbon;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Http\RedirectResponse;

class StoreSkill
{
    public function handle(Request $request): Redirector|RedirectResponse
    {
        Skill::create([
            'name' => $request->name,
            'level' => $request->level,
            'created_at' => Carbon::now(),
        ]);
        $notification = [
            'message' => 'Skill Added Successfully',
            'alert-type' => 'success',
        ];
        return redirect()->back()->with($notification);
    }
}