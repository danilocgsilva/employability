<?php

declare(strict_types=1);

namespace App\TemplateModels;

use App\TemplateModels\Traits;

class BaseLightSchema extends Base implements BaseInterface
{
    use Traits\BackgroundLayoutLight;
    use Traits\TextColorsLight;
    use Traits\BorderDividerLight;
    use Traits\FormsLight;
}