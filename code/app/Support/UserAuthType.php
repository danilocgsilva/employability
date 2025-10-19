<?php

declare(strict_types=1);

namespace App\Support;

enum UserAuthType
{
    case Anyone;
    case Guest;
    case Authenticated;
}
