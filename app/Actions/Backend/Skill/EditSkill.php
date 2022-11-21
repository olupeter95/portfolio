<?php

namespace App\Actions\Backend\Skill;

use App\Models\Skill;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;

class EditSkill
{
    public function handle(int $id): View|Factory
    {
        $skill = Skill::findorFail($id);
        return view('backend.skill.skill_edit', compact('skill'));
    }
}