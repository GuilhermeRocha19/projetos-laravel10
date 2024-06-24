<?php

namespace Database\Seeders;

use App\Models\Situacao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SituacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!Situacao::where('nome','Paga')->first()){
            Situacao::create([
                'nome' => 'Paga',
                'cor' => 'success'
            ]);
        }
        if(!Situacao::where('nome','Pendente')->first()){
            Situacao::create([
                'nome' => 'Pendente',
                'cor' => 'danger'
            ]);
        }
        if(!Situacao::where('nome','Cancelada')->first()){
            Situacao::create([
                'nome' => 'Cancelada',
                'cor' => 'warning'
            ]);
        }
    }
}
