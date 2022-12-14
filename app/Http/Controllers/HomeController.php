<?php

namespace App\Http\Controllers;

use App\Models\Contato;
use App\Models\Comentario;
use App\Models\Artigo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [];
        return view('site.index', $data);
    }

    public function portfolio()
    {
        $comentarios = Comentario::get();
        return view('site.portfolio', compact('comentarios'));
    }

    public function contato()
    {
        $data = [];
        return view('site.contato', $data);
    }

    public function artigos()
    {
        $artigos = Artigo::get();
        return view('site.artigos', compact('artigos'));
    }

    public function post($id)
    {
        $post = Artigo::where('id', $id)->first();
        return view('site.post', compact('post'));
    }

    public function envioContato(Request $request){

        $Contato = new Contato;
        $Contato->nome           = $request->input('name');
        $Contato->email          = $request->input('email');
        $Contato->mensagem       = $request->input('mensagem');
        $Contato->data           = date('Y-m-d H:i:s');
        $Contato->save();

        $json = ['status' => true];
        return response()->json($json);
    }

    public function envioComentario(Request $request)
    {
            
            $Comentario = new Comentario;
            $Comentario->nome          = $request->input('name');
            $Comentario->email         = $request->input('email');
            $Comentario->comentario    = $request->input('comentario');
            $Comentario->data_coment = date('Y-m-d H:i:s');
            $Comentario->save();

        $json = ['status' => true];
        return response()->json($json);
    }
}
