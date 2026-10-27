<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reporte::create([
            'user_id' => 1,
            'ubicacion' => 'Casa x',
            'descripcion' => 'bla bla bla',
            'fecha_inicio' => '2026-05-05',
        ]);
        DB:table('registros')->insert([
        'user_id' => 1,
        'ubicacion' => 'Casa x',
        'descripcion' => 'bla bla bla',
        'fecha_inicio' => '2026-05-05',
        'created_at' => now(),
        'updated_at' => now()
        ]);
    }
}
