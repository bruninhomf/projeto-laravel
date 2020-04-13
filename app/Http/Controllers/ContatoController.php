<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Aoo\Http\Requests;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = [
            (object)["nome"=>"maria","tel"=>"654773"],
            (object)["nome"=>"maria","tel"=>"654773"]
        ];
        return view('contato.index', compact('contatos'));
    }
    public function criar()
    {
        return "esse é o criar de controller";
    }
    public function editar()
    {
        return "esse é o editarde  controller";
    }
}
