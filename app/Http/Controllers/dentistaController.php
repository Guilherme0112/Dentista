<?php

namespace App\Http\Controllers;
use App\Models\tratamento;
use Illuminate\Http\Request;

class dentistaController extends Controller
{
    public function index(){
        $tratamentos = tratamento::all();
        return view('pages.index', ['tratamentos'=>$tratamentos]);
    }
    public function sobre(){
        return view('pages.sobre.sobre');
    }
    public function planos(){
        return view('pages.planos.planos');
    }
}
