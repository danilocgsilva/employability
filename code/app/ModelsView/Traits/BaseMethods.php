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

    public function getMobileMenu(): string
    {
        return $this->getMenu(
            $this->getMobileClassesMenu()
        );
    }

    public function getDesktopMenu(): string
    {
        return $this->getMenu(
            $this->getDesktopClassesMenu()
        );
    }

    private function getMenu(string $entryClasses): string
    {
        $menuString = "";
        foreach ($this->getMenuList() as $item) {
            $entryMenuBase = "<a href='%s' class='%s'>%s</a>";

            $route = $item['route'];
            $entryName = $item["name"];

            $entryMenu = sprintf($entryMenuBase, $route, $entryClasses, $entryName);

            $menuString .= $entryMenu;
        }
        return $menuString;
    }

    private function getMobileClassesMenu(): string
    {
        return $this->getTextSecondary() . " hover:" . $this->getTextMain() . " block px-3 py-2 text-base font-medium transition-colors hover:" . $this->getBackground3() . " rounded";
    }

    private function getDesktopClassesMenu(): string
    {
        return $this->getTextSecondary() . " hover:" . $this->getTextMain() . " px-3 py-2 text-sm font-medium transition-colors";
    }

    private function getMenuList()
    {
        return [
            [
                'name' => 'Home',
                'route' => route('welcome'),
            ],
            [
                'name' => 'Login',
                'route' => route('login'),
            ],
            [
                'name' => 'Register',
                'route' => route('register'),
            ],
        ];
    }
}
