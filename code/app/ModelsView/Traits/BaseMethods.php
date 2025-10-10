<?php

declare(strict_types=1);

namespace App\ModelsView\Traits;

trait BaseMethods
{
    public function getMarginContent($session): string
    {
        if ($session->hasAny('errors')) {
            return 'min-h-[calc(100vh-8rem)] py-8';
        }
        return 'min-h-[calc(100vh-4rem)] py-12';
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
