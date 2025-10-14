<?php

declare(strict_types=1);

namespace App\TemplateModels\Traits;

trait TextColorsDark
{
    public function getTextMain(): string
    {
        return "text-white";
    }

    public function getTextSecondary(): string
    {
        return "text-gray-300";
    }

    public function getTextTertiary(): string
    {
        return "text-gray-400";
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
