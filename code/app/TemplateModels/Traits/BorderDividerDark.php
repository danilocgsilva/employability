<?php

declare(strict_types=1);

namespace App\TemplateModels\Traits;

trait BorderDividerDark
{
    public function getBorder(): string
    {
        return "border-gray-700";
    }

    public function getDivider(): string
    {
        return "border-gray-600";
    }
}
