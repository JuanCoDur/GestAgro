<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\finca;
use App\User;
use App\Http\Requests\FincasRequest;
use Illuminate\Support\Facades\View;

class FincasController extends Controller
{
    public function index(){
    	$finc= finca::orderBy('id','DESC')->paginate();
    	return view('finc.findex', compact('finc'));
    }

    public function fincascrod(){

        return view('fincascrod');
    }

	public function create(){
        $us = User::all();
    	return view('finc.create',compact('us'));
    }

    public function store(FincasRequest $request){
    	$finc = new finca;
    	
    	$finc->nomfinca = $request->nomfinca;
    	$finc->domfinca = $request->domfinca;
    	$finc->telfinca = $request->telfinca;
    	$finc->ciudad   = $request->ciudad;
    	$finc->estado   = $request->estado;
    	$finc->us_id    = $request->us_id;

    	$finc->save();

    	return redirect()->route('finca.index')
    					 ->with('info', 'El producto se agrego correctamente');
    }

	public function edit($id){
        $us = User::all();
    	$finc = finca::find($id);
    	return view('finc.edit', compact('finc','us'));
    }

    public function update(FincasRequest $request, $id){
    	$finc = finca::find($id);

    	$finc->nomfinca = $request->nomfinca;
    	$finc->domfinca = $request->domfinca;
    	$finc->telfinca = $request->telfinca;
    	$finc->ciudad   = $request->ciudad;
    	$finc->estado   = $request->estado;
    	$finc->us_id    = $request->us_id;

    	$finc->save();

    	return redirect()->route('finca.index')
    					 ->with('info', 'El producto fue actualizado');
    }

    public function show($id){

    	$finc = finca::find($id);
    	return view('finc.show', compact('finc'));
    }

    public function destroy($id){

    	$finc = finca::find($id);
    	$finc->delete();

    	return back()->with('info', 'El producto fue eliminado');
    }
}
