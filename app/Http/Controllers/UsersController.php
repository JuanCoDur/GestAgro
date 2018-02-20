<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Carbon;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Metodo para guardar usuarios
        //Guardar usuario
 /*       DB::table('users')->insert([
            "name" => $request->input('name'),
            "lastname" => $request->input('lastname'),
            "phone" => $request->input('phone'),
            "email" => $request->input('email'),
            "password" => $request->input('password'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);*/
        $this->validacion($request);
        $request['password'] = bcrypt($request->password);
        User::create($request->all());

        //Redireccionar
        return redirect('/');
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

    public function validacion($request)
    {
        return $validatedData = $request->validate([
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            //'phone' => 'numeric|unique:users',
            'phone' => 'numeric',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|max:255',
        ]);
    }
}
