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

    public function getInputClasses(bool $error = false): string
    {
        $classes = "w-full transition-all placeholder-gray-400 pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:border-transparent bg-autofill-dark {$this->getTextMain()} {$this->getBackground2()}";
        if ($error) {
            $classes .= " focus:ring-red-500 border-red-400 bg-gray-800";
        } else {
            $classes .= " focus:ring-gray-500 {$this->getDivider()}";
        }

        return $classes;
    }
}
