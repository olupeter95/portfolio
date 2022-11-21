<?php

namespace App\Actions\Backend\Skill;

use App\Models\Skill;
use Illuminate\Contracts\View\View;
use Illuminate\Contracts\View\Factory;



class ViewSkill
{
    public function handle(): View|Factory
    {
        $skills = Skill::get()->all();
        return view('backend.skill.skill_view', compact('skills'));
    }
}