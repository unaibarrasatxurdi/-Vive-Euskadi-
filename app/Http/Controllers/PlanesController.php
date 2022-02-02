<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


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

    public function insertarFavoritos( $id, $documentname, $territory)
    {
        DB::insert('insert into planes (DocumentName, Provincia) values (?, ?) ON DUPLICATE KEY UPDATE DocumentName=DocumentName', [$documentname, $territory]);
        DB::insert('insert into favoritos (id, DocumentName) values (?, ?) ON DUPLICATE KEY UPDATE DocumentName=DocumentName', [$id, $documentname]);
    }

    public function borrarFavoritos($id, $documentname)
    {
        DB::delete('delete from favoritos where id = ? and DocumentName = ?',[$id,$documentname]);
    }

    public function selectFavoritos($id)
    {
        $results = DB::select('select DocumentName from favoritos where id = ?',[$id]);
        return $results;
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
