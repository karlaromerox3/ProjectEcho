<?php

namespace App\View\Components;

use App\Models\Question;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class QuestionComponent extends Component
{
    private $answerType;
    /**
     * Create a new component instance.
     */
    public function __construct($answerType)
    {
        $this->answerType = $answerType;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $params = [
            'answerType' => $this->answerType,
            'agreement7Answers' => Question::AGREEMENT7,
            'seguridad5Answers' => Question::SEGURIDAD5,
            'frecuencia5Answers' => Question::FRECUENCIA5,
        ];
        return view('components.question-component', $params);
    }
}
