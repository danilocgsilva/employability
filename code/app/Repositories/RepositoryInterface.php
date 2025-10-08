<?php

declare(strict_types=1);

namespace App\Repositories;

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

    public function find($id): ?object;

    public function create(array $data): object;

    public function update($id, array $data): ?object;

    public function delete($id): bool;
}