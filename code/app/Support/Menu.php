<?php

declare(strict_types=1);

namespace App\Support;

use Illuminate\Auth\Events\Authenticated;

class Menu
{
    public static function getMenuList(): array
    {
        return [
            [                
                'name' => 'Home',
                'route' => route('welcome'),
                'show_when' => UserAuthType::Anyone
            ],
            [
                'name' => 'Login',
                'route' => route('login'),
                'show_when' => UserAuthType::Guest
            ],
            [
                'name' => 'Register',
                'route' => route('register'),
                'show_when' => UserAuthType::Guest
            ],
        ];
    }
}
