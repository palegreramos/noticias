<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class NoticiaController extends Controller
{

    public function __invoke($id)
    {
            $noticia=Noticia::find($id);
            $categorias=$noticia->find($noticia->id)->categorias;
            return view('noticia',['noticia'=>$noticia,'categorias'=>$categorias]);

    }
}
