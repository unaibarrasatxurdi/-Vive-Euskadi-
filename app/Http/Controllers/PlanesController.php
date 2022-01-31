<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facades\App\Repository\Posts;
use Illuminate\Support\Facades\DB;
class PlanesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('busqueda')->with('id',$id);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('busqueda')->with('id', $id);
    }

    public function insertarFavoritos( $id, $documentname)
    {
        return $this->DB::insert('insert into favoritos (id, name) values (?, ?)', [$id, $documentname]);
    }

    public function borrarFavoritos($id, $documentname)
    {
        return $this->DB::delete('delete from favoritos where id = ? and DocumentName = ?',[$id,$documentname]);
    }

    public function edit($plan)
    {
        
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
    public function destroy($id)
    {
        //
    }
}
