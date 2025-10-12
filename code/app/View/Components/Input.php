<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public function __construct(
        public string $name,
        public string $label,
        public string $type,
        public string $placeholder,
        public string $inputId,
        public string $inputClasses,
        public string $inputValidationErrorMessage = '',
        public bool $showErrorMessage = false,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
