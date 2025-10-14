<?php

declare(strict_types=1);

namespace App\TemplateModels;

use App\TemplateModels\Traits;

class BaseDarkSchema extends Base implements BaseInterface
{
    use Traits\BackgroundLayoutDark;
    use Traits\TextColorsDark;
    use Traits\BorderDividerDark;
    use Traits\FormsDark;
}
