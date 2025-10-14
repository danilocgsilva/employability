<?php

declare(strict_types=1);

namespace App\TemplateModels\Traits;

trait BorderDividerLight
{
    public function getBorder(): string
    {
        return "border-gray-200";
    }

    public function getDivider(): string
    {
        return "border-gray-300";
    }
}
