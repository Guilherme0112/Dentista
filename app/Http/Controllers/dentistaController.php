<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dentistaController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function sobre(){
        return view('pages.sobre.sobre');
    }
    public function planos(){
        return view('pages.planos.planos');
    }
}
