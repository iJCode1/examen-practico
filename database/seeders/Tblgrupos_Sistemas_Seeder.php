<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tblgrupos_Sistemas_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tblgrupos_sistema')->insert([
            'cve_grupo_sistema' => 1,
            'descripcion_grupo' => 'Asesor de Ventas',
            'activo' => 1,
        ]);
    }
}
