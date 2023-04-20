<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class InicialController extends Controller
{
    //
    public function __invoke()
    {
    // Código de la función
    $noticias=Noticia::orderBy('fechapub', 'desc')->take(5)->get();
    return view('inicial',['portada'=>$noticias]);
     }

}
