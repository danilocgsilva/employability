<?php

declare(strict_types=1);

namespace App\ModelsView\Traits;

trait FormsDark
{
    public function getFormBackground(): string
    {
        return "bg-gray-800";
    }

    public function getFormFocus(): string
    {
        return "focus:ring-offset-gray-900";
    }

    public function getButton(): string
    {
        return "bg-gray-700";
    }

    public function getButtonHover(): string
    {
        return "hover:bg-gray-600";
    }

    public function getOverlay(): string
    {
        return "rgba(0, 0, 0, 0.5)";
    }

    
}
