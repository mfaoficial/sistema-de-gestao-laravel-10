<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TreinoController extends Controller
{
    public function variaveis(int $p1, int $p2)
    {
        // Formas de retornar uma view com parâmetros

        // echo "A soma de $p1 + $p2 é: " . ($p1+$p2);

        // return view('anotacoes.variaveis', ['x' => $p1, 'y' => $p2]);

        // return view('anotacoes.variaveis', compact('p1', 'p2'));

        return view('anotacoes.variaveis')->with('p1', $p1)->with('p2', $p2);
    }

    public function condicionalTernario()
    {
        $fornecedores = [
            0 => [
                'nome'   => 'Fornecedor 1',
                'status' => 'S',
                'cnpj'   => '00.000.000/0001-00',
            ],
            1 => [
                'nome'   => 'Fornecedor 2',
                'status' => 'N',
            ],
        ];

        // condicao ? se verdadeiro : se falso;
        // também é possível encadear mais condições (não indicado)
        // condicao ? se verdadeiro : (condicao ? se verdadeiro : se falso);

        $msg = isset($fornecedores[1]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado';
        echo $msg;
    }

    public function condicionalDeValorDefault()
    {
        
    }
}
