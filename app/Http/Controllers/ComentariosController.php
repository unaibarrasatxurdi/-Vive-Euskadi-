<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Comentarios;
use Illuminate\Support\Facades\Auth;

class ComentariosController extends Controller
{
    public function mostrarComentarios($documentName)
    {
        // $result = DB::select('select * from comentarios where DocumentName = ?', [$documentName]);
        $result = Comentarios::where('id', Auth::user()->id);
        return $result;
        
    }
    //Función que hace una inserccion en la tabla de comentarios usando la id del usuario y el plan en el que se ha hecho el comentario
    public function insertarComentario( $id, $documentname) {
        DB::insert('INSERT INTO comentarios (id, DocumentName) VALUES (?, ?) ON DUPLICATE KEY UPDATE DocumentName = DocumentName', [$id, $documentname]);
    }

    //Función que eliminara el comentario recibiendo el id de el comentario a borrar 
    public function borrarComentario($IdComentario) {
        DB::delete('DELETE FROM comentarios WHERE IdComentario = ?',[$IdComentario]);
    }
}
