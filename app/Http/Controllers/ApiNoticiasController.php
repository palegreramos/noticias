<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Noticia;

class ApiNoticiasController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $page
     * @return \Illuminate\Http\Response
     */
    public function show($page)
    {
        $noticia=Noticia::select("id","titulo","fechapub")->offset(10*(intval($page)-1))->take(10)->get()->toJson();
        return $noticia;
    }

    
}
