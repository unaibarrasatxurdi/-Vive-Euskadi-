<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Comentarios;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;

class ComentariosController extends Controller
{
    public function mostrarComentarios($documentName)
    {
        $result = DB::select('select * from comentarios where DocumentName = ?', [$documentName]);
        return $result;
        
    }
}
