<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2){
        // echo 'A soma dos parâmetros é ' . ($p1 + $p2);
        echo "A soma dos parâmetros $p1 e $p2 é: " . ($p1 + $p2);
    }
}
