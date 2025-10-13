<?php

declare(strict_types=1);

namespace App\Support;

class Menu
{
    public static function getMenuList(): array
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
