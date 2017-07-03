<?php

namespace App\Http\Controllers;

use App\expediente;
use Illuminate\Http\Request;

class expedienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expedientes = expediente::orderBy('nit')->paginate(5);
        return view('expedientes.index', compact('expedientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return  view('expedientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $expediente = new expediente;
        $expediente ->nit               =$request ->get('nit');
        $expediente ->nombre            =$request ->get('nombre');
        $expediente ->fnacimiento       =$request ->get('fnacimiento');
        $expediente ->telefono          =$request ->get('telefono');
        $expediente ->email             =$request ->get('email');
        $expediente ->direccion         =$request ->get('direccion');
        $expediente ->save();
        return redirect()->route('expedientes.index');
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
