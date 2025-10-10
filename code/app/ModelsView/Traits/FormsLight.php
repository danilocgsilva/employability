<?php

declare(strict_types=1);

namespace App\ModelsView\Traits;

trait FormsLight
{
    public function getFormBackground(): string
    {
        return "bg-white";
    }

    public function getFormFocus(): string
    {
        return "focus:ring-offset-white";
    }

    public function getButton(): string
    {
        return "bg-gray-600";
    }

    public function getButtonHover(): string
    {
        return "hover:bg-gray-700";
    }

    public function getOverlay(): string
    {
        return "rgba(0, 0, 0, 0.1)";
    }
}
