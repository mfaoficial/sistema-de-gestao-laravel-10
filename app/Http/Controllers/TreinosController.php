<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TreinosController extends Controller
{
    public function variaveis(int $p1, int $p2)
    {
        // Formas de retornar uma view com parâmetros

        // echo "A soma de $p1 + $p2 é: " . ($p1+$p2);

        // return view('treinos.variaveis', ['x' => $p1, 'y' => $p2]);

        // return view('treinos.variaveis', compact('p1', 'p2'));

        return view('treinos.variaveis')->with('p1', $p1)->with('p2', $p2);
    }
}
