<?php

declare(strict_types=1);

namespace App\ModelsView;

interface BaseInterface
{
    public function getBackgroundMain(): string;

    public function getBackground2(): string;

    public function getBackground3(): string;

    public function getGradient(): string;

    public function getTextMain(): string;

    public function getTextSecondary(): string;

    public function getTextTertiary(): string;

    public function getTextQuaternary(): string;

    public function getBorder(): string;

    public function getDivider(): string;

    public function getFormBackground(): string;

    public function getFormFocus(): string;

    public function getButton(): string;

    public function getButtonHover(): string;

    public function getOverlay(): string;

    public function getButtonTextColor(): string;

    public function getBackgroundIcon(): string;

    public function getMarginContent($session): string;

    public function getInputClasses(bool $error = false): string;
}
