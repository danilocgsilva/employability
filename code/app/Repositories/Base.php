<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Repositories\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class Base implements RepositoryInterface
{
    protected Model $model;
}