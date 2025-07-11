<?php

namespace App\DTOs;

class KpiDTO
{
    public function __construct(
        public int $id,
        public string $titulo,
        public float|int $valor,
        public float $variacao_percentual
    ) {}
}