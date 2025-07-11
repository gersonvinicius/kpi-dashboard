<?php

namespace App\Services;

use App\Repositories\Contracts\KpiRepositoryInterface;

class KpiService
{
    public function __construct(
        protected KpiRepositoryInterface $repository
    ) {}

    public function listarTodos()
    {
        return $this->repository->all();
    }
}