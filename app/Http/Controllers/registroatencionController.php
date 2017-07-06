<?php

namespace App\Http\Controllers;


use App\motivo;
use App\expediente;
use App\registroatencion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class registroatencionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$registros = registroatencion::orderBy('nit')->paginate(10);
        return view('registrosatencion.index', compact('registros'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nit = DB::table('expedientes') -> get();
        $motivo = DB::table('motivos')->get();    
        return view('registrosatencion.create', compact('nit','motivo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        $registro = new registroatencion;
        $registro -> nit=$request ->get('nit');     
        $registro -> f_atencion=$request ->get('f_atencion');     
        $registro -> hora=$request ->get('hora');     
        $registro -> motivo=$request ->get('motivo');     
        $registro -> presion_arterial=$request ->get('presion_arterial');     
        $registro -> peso=$request ->get('peso');     
        $registro -> estatura=$request ->get('estatura');     
        $registro -> estado=$request ->get('estado');     
        $registro -> comentarios=$request ->get('comentarios');         
        $registro -> user_id=$request ->get('user_id');     
        $registro ->save();
        return redirect()->route('registrosatencion.index');
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
    public function destroy($id)
    {
        //
    }
}
