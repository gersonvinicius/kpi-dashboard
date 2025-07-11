<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kpi;

class KpiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kpi::insert([
            [
                'titulo' => 'Vendas do Dia',
                'valor' => 1280.50,
                'variacao_percentual' => 5.2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Visitas do Site',
                'valor' => 3450,
                'variacao_percentual' => -3.4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Novos Usuários',
                'valor' => 87,
                'variacao_percentual' => 2.1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Pedidos Finalizados',
                'valor' => 57,
                'variacao_percentual' => 1.7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
