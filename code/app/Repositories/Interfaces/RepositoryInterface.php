<?php

namespace App\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface RepositoryInterface
{
    public function all(): Collection;

    public function paginate(
        int $perPage = 15,
        int $page = 1,
        ?string $search = null,
        ?string $sort = null,
        string $direction = 'asc'
    ): LengthAwarePaginator;

    public function find(int $id): ?object;

    public function create(array $data): object;

    public function update(int $id, array $data): ?object;

    public function delete(int $id): bool;
}