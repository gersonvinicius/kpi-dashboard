<?php

namespace App\Repositories\Eloquent;

use App\Models\Kpi;
use App\DTOs\KpiDTO;
use App\Repositories\Contracts\KpiRepositoryInterface;

class KpiRepository implements KpiRepositoryInterface
{
    public function all(): array
    {
        return Kpi::all()->map(function ($kpi) {
            return new KpiDTO(
                $kpi->id,
                $kpi->titulo,
                $kpi->valor,
                $kpi->variacao_percentual
            );
        })->toArray();
    }
}