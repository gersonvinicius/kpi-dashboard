<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Services\KpiService;

class KpiController extends Controller
{
    public function __construct(
        protected KpiService $service
    ) {}

    public function index()
    {
        return response()->json($this->service->listarTodos());
    }
}