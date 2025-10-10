<?php

declare(strict_types=1);

namespace App\ModelsView\Traits;

trait BackgroundLayoutLight
{
    public function getBackgroundMain(): string
    {
        return "bg-white";
    }

    public function getBackground2(): string
    {
        return "bg-gray-50";
    }

    public function getBackground3(): string
    {
        return "bg-gray-200";
    }

    public function getGradient(): string
    {
        return "from-gray-50 via-gray-100 to-gray-50";
    }

    public function getBackgroundIcon(): string
    {
        return "bg-gray-200";
    }
}
