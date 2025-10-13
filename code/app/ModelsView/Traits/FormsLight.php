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

    public function getInputClasses(bool $error = false): string
    {
        $classes = "w-full transition-all placeholder-gray-400 pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:border-transparent {$this->getBackground2()}";
        if ($error) {
            $classes .= " focus:ring-red-500 border-red-400 bg-red-50";
        } else {
            $classes .= " focus:ring-gray-500 {$this->getDivider()} {$this->getTextMain()}";
        }

        return $classes;
    }
}
