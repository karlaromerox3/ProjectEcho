<?php

namespace App\View\Components;

use App\Models\Student;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class GeneralDataFromBody extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $params = [
            'models' => Student::MODELS,
            'genders' => Student::GENDERS,
            'graduationTimes' => Student::GRADUATION_TIMES,
        ];
        return view('components.general-data-from-body', $params);
    }
}
