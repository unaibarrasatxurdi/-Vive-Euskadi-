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
        // $result = DB::select('select * from comentarios where DocumentName = ?', [$documentName]);
        $result = DB::select('SELECT c.idComentario, c.DocumentName, c.Texto, c.Fecha, u.name FROM comentarios c, users u WHERE DocumentName = ? AND u.id = c.id', [$documentName]);
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
    public function edit($IdComentario)
    {
        $comentario = Comentarios::find($IdComentario);
        return view('comentarios.edit', compact('comentario'));
    }
    
    public function update(Request $request, Comentarios $IdComentario)
    {

        $requestData = $request->all();
        /* $comentario = Comentarios::where('IdComentario',$IdComentario)->firstOrFail(); */
        $IdComentario->update($requestData);
        return redirect()->route('admin.adminComent')
            ->with('mensaje', 'El comentario ha sido modificado correctamente');
        
    }
}
