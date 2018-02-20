<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\fincas;
use App\User;
use App\Http\Requests\FincasRequest;
use Illuminate\Support\Facades\View;

class FincasController extends Controller
{
    public function index(){

    	$fin= fincas::orderBy('id','DESC')->paginate();
    	return view('finc.findex', compact('fin'));
    }

    public function fincascrod(){

        return view('fincascrod');
    }

	public function create(){
        $us = User::all();
    	return view('finc.create',compact('us'));
    }

    public function store(FincasRequest $request){
    	$finc = new fincas;
    	
    	$finc->nomfinca = $request->nomfinca;
    	$finc->domfinca = $request->domfinca;
    	$finc->telfinca = $request->telfinca;
    	$finc->ciudad   = $request->ciudad;
    	$finc->estado   = $request->estado;
    	$finc->us_id    = $request->us_id;

    	$finc->save();

    	return redirect()->route('fincas.index')
    					 ->with('info', 'El producto se agrego correctamente');
    }

	public function edit($id){
        $us = User::all();
    	$finc = fincas::find($id);
    	return view('finc.edit', compact('finc','us'));
    }

    public function update(FincasRequest $request, $id){
    	$finc = fincas::find($id);

    	$finc->nomfinca = $request->nomfinca;
    	$finc->domfinca = $request->domfinca;
    	$finc->telfinca = $request->telfinca;
    	$finc->ciudad   = $request->ciudad;
    	$finc->estado   = $request->estado;
    	$finc->us_id    = $request->us_id;

    	$finc->save();

    	return redirect()->route('fincas.index')
    					 ->with('info', 'El producto fue actualizado');
    }

    public function show($id){

    	$finc = fincas::find($id);
    	return view('finc.show', compact('finc'));
    }

    public function destroy($id){

    	$finc = fincas::find($id);
    	$finc->delete();

    	return back()->with('info', 'El producto fue eliminado');
    }
}
