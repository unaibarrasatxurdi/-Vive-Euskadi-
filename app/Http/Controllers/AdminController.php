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
    public function index()
    {
        return view('layouts.admin');
    }

    public function adminComent()
    {
        
        $comentarios = Comentarios::paginate(5);
        return view('admin.comenAd')->with('comentarios', $comentarios);
    }

    public function adminUsuario()
    {
       
        $users = User::paginate(8);
        return view('admin.usuAd')->with('users', $users);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function destroyComent($IdComentario)
    {
        
        $comentario = Comentarios::find($IdComentario)->delete();

        return redirect()->route('admin.adminComent')->with('mensaje','Comentario borrado con éxito');
    }

    public function destroyUsuario($id)
    {
        
        $user = User::find($id)->delete();
        return redirect()->route('admin.adminUsuario')->with('mensaje','Usuario borrado con éxito');
    }
}
