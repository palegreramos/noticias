<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\NoticiaCategoria;
use App\Models\Noticia;

class ApiCategoriaController extends Controller
{
   
    public function __invoke($id,$page) {

        $categorias=NoticiaCategoria::select('noticia_id')->where('categoria_id',$id)->offset(10*(intval($page)-1))->take(10)->get();
       
       foreach($categorias as $categoria) {
            $noticia=Noticia::select("id","titulo","fechapub")->where('id',$categoria->noticia_id)->get();
            //$noticias[]=json_decode(json_encode($noticia));
            $noticias[]=$noticia[0];
        }
        return json_encode($noticias);
    }
     }
   
