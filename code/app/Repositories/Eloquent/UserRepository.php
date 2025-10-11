<?php

namespace App\Repositories\Eloquent;

use App\Models\User;

class UserRepository extends BaseRepository
{
    public function __construct()
    {
        $user = new User();
        parent::__construct($user);
    }

    protected function getSearchableFields(): array
    {
        return ['name', 'email'];
    }
}
