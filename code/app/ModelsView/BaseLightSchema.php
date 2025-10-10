<?php

declare(strict_types=1);

namespace App\ModelsView;

use App\ModelsView\Traits;

class BaseLightSchema implements BaseInterface
{
    use Traits\BackgroundLayoutLight;
    use Traits\TextColorsLight;
    use Traits\BorderDividerLight;
    use Traits\FormsLight;
}