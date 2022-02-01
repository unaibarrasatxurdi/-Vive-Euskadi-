<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ComentariosController extends Controller
{
    public function insertarComentario( $id, $documentname) {
        DB::insert('INSERT INTO comentarios (id, DocumentName) VALUES (?, ?) ON DUPLICATE KEY UPDATE DocumentName = DocumentName', [$id, $documentname]);
    }

    public function borrarComentario($IdComentario) {
        DB::delete('DELETE FROM comentarios WHERE IdComentario = ?',[$IdComentario]);
    }
}
