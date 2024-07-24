<?php

namespace App\Http\Controllers;

use App\Models\pergunta;
use App\Models\plano;
use App\Models\tratamento;
use Illuminate\Http\Request;

class dentistaController extends Controller
{
    public function index(){
        $tratamentos = tratamento::all();
        $planos = plano::all();
        // formata o preco, colocando a vírgula
        $planos->transform(function($plano){
            $plano->precoFormatado = number_format($plano->valor, 2, ',', '.');
            return $plano;
        });
        return view('pages.index', ['tratamentos'=>$tratamentos], ['planos'=>$planos]);
    }
    public function sobre(){
        return view('pages.sobre.sobre');
    }
    public function planos(){
        $planos = plano::all();
        $perguntas = pergunta::all();
        $planos->transform(function($plano){
            $plano->precoFormatado = number_format($plano->valor, 2, ',', '.');
            return $plano;
        });
        return view('pages.planos.planos', ['planos'=>$planos], ['perguntas'=>$perguntas]);
    }
    public function contato(){
        return view('pages.contato.contato');
    }
}
