<?php

namespace App\Http\Controllers;

use App\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request) {
        // var_dump($_POST);

        // $contato = new SiteContato();
        // $contato->nome = $request->input('nome');
        // $contato->telefone = $request->input('telefone');
        // $contato->email = $request->input('email');
        // $contato->motivo_contato = $request->input('motivo_contato');
        // $contato->mensagem = $request->input('mensagem');
    
        // // print_r($contato->getAttributes());
        // $contato->save();

        $contato = new SiteContato();
        $contato->create($request->all());
        // $contato->save();
        // print_r($contato->getAttributes());
        
        return view('site.contato');
    }
}
