<?php

declare(strict_types=1);

namespace App\ModelsView;

use App\ModelsView\Traits;

class BaseDarkSchema implements BaseInterface
{
    use Traits\BackgroundLayoutDark;
    use Traits\TextColorsDark;
    use Traits\BorderDividerDark;
    use Traits\FormsDark;
}
