<?php

declare(strict_types=1);

namespace App\ModelsView\Traits;

trait BackgroundLayoutDark
{
    public function getBackgroundMain(): string
    {
        return "bg-gray-900";
    }

    public function getBackground2(): string
    {
        return "bg-gray-800";
    }

    public function getBackground3(): string
    {
        return "bg-gray-700";
    }

    public function getGradient(): string
    {
        return "from-gray-900 via-gray-800 to-gray-900";
    }

    public function getBackgroundIcon(): string
    {
        return "bg-gray-700";
    }
}
