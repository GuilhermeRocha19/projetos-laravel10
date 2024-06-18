<?php

namespace Database\Seeders;

use App\Models\Conta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!Conta::where('nome','Energia')->first()){
            Conta::create([
                'nome' => 'Energia',
                'valor' => '147.52',
                'vencimento' => '2024-11-02'
            ]);
        }
        if(!Conta::where('nome','Gás')->first()){
            Conta::create([
                'nome' => 'Gás',
                'valor' => '110.25',
                'vencimento' => '2024-11-11'
            ]);
        }
        if(!Conta::where('nome','Internet')->first()){
            Conta::create([
                'nome' => 'Internet',
                'valor' => '100.99',
                'vencimento' => '2024-11-15'
            ]);
        }
    }
}
