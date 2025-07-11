<?php

namespace App\Repositories\Contracts;

use App\DTOs\KpiDTO;

interface KpiRepositoryInterface
{
    /**
     * @return KpiDTO[]
     */
    public function all(): array;
}