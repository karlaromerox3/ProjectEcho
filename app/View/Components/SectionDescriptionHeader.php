<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SectionDescriptionHeader extends Component
{
    private $sectionName;
    private $sectionDescription;
    /**
     * Create a new component instance.
     */
    public function __construct($sectionName, $sectionDescription)
    {
        $this->sectionName = $sectionName;
        $this->sectionDescription = $sectionDescription;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $params = [
            'sectionName' => $this->sectionName,
            'sectionDescription' => $this->sectionDescription,
        ];
        return view('components.section-description-header', $params);
    }
}
