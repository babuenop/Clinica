<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id','ASC')->paginate(5);
        return view('user.index', compact('users'));
    }


    public function create()
    {
       return view('user.create'); 
    }


    public function store(Request $request)
    {
       //dd($request->all());
         $usuario = new User;
         $usuario ->name        =$request ->get('name');
         $usuario ->email       =$request ->get('email');
         $usuario ->password   =$request ->get (bcrypt('password'));
         $usuario ->save();
         return redirect()->route('registro');

    }


    public function show($id)
    {
        $user = user::find($id);
        return view('user.show', compact('user'));    
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
