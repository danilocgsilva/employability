<?php

declare(strict_types=1);

namespace App\TemplateModels\Traits;

trait TextColorsLight
{
    public function getTextMain(): string
    {
        return "text-gray-900";
    }

    public function getTextSecondary(): string
    {
        return "text-gray-700";
    }

    public function getTextTertiary(): string
    {
        return "text-gray-600";
    }

    public function getTextQuaternary(): string
    {
        return "text-gray-500";
    }

    public function getButtonTextColor(): string
    {
        return "text-white";
    }
}

