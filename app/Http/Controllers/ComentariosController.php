<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Comentario;
use App\Models\User;

class ComentariosController extends Controller
{
    // public function insertarComentario( $id, $documentname) {
    //     DB::insert('INSERT INTO comentarios (id, DocumentName) VALUES (?, ?) ON DUPLICATE KEY UPDATE DocumentName = DocumentName', [$id, $documentname]);
    // }

    // public function borrarComentario($IdComentario) {
    //     DB::delete('DELETE FROM comentarios WHERE IdComentario = ?', [$IdComentario]);
    // }

    // public function get($DocumentName) {
    //     DB::select('SELECT FROM comentarios WHERE DocumentName = ?', [$DocumentName]);
    // }

    // public function store(Request $request)
    // {
    // 	$request->validate([
    //         'texto'=>'required',
    //     ]);
   
    //     $input = $request->all();
    //     $input['user_id'] = auth()->user()->id;
    
    //     Comentario::create($input);
   
    //     return back();
    // }

    // public function index($DocumentName) {
    //     $comentarios = Comentario::where('page_id', $DocumentName) -> get();
    //     $dataComentarios = [];

    //     foreach ($comentarios as $key) {
    //         $user = User::find($key->users_id);
    //         $name = $user -> name;
    //         $texto = $key -> texto;
    //     }
    // }

    public function index() {
        $comentarios = Comentario::all()->toArray();
        return $comentarios;
    }

    public function store(Request $request) {
        
    }
}
