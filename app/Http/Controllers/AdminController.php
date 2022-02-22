<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comentarios;
use Illuminate\Support\Arr;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //Funcion que redirije al layout de usuarios, pero a la sección de admin
    public function index()
    {
        return view('layouts.admin');
    }

    public function adminComent()
    {
        //funcion para mostrar los comentarios desde la base de datos en el apartado de admin
        $comentarios = Comentarios::paginate(5);
        foreach($comentarios as $comentario){
            $filaUser = User::findOrFail($comentario->id);
            Arr::add($comentario, 'nombre_usuario', $filaUser->name);
        }
        return view('admin.comenAd')->with('comentarios', $comentarios);
    }

    public function adminUsuario()
    {
       //funcion para mostrar los usuarios desde la base de datos en el apartado de admin
        $users = User::paginate(5);
        return view('admin.usuAd')->with('users', $users);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyComent($id)
    {
        $comentario = Comentarios::where('IdComentario',$id)->delete();
        return redirect()->route('admin.adminComent')->with('mensaje','Comentario borrado con éxito');
    }

    public function destroyUsuario($id)
    {
        //Funcion que elimina un usuario creado por algun usuario. Se crea un mensaje para confirmar el borrado
        $user = User::find($id)->delete();
        return redirect()->route('admin.adminUsuario')->with('mensaje','Usuario borrado con éxito');
    }
}
