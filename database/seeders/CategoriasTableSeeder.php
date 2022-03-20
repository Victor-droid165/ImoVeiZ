<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date("Y-m-d H:i:s");

        DB::table("categorias")->insert([
            [
                "nome"       => "Venda",
                "descricao"  => "Venda de Imóveis",
                "created_at" => $now,
                "updated_at" => $now,
            ],
            [
                "nome"       => "Aluguel",
                "descricao"  => "Aluguel de Imóveis",
                "created_at" => $now,
                "updated_at" => $now,
            ]
        ]);
    }
}
