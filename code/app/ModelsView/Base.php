<?php

declare(strict_types=1);

namespace App\ModelsView;

class Base
{
    public function getBackgroundMain(): string
    {
        return "bg-gray-900";
    }

    public function getBackground2(): string
    {
        return "bg-gray-800";
    }
}