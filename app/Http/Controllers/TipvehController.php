<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipsvehiculo;
use App\Http\Requests\TipvehRequest;
use Illuminate\Support\Facades\View;

class TipvehController extends Controller
{
    public function index(){
    	$tp=tipsvehiculo::orderBy('id','DESC')->paginate();
    	return view('tipvehlo.tpindex', compact('tp'));
    }

 	 public function create(){
    	
    	return view('tipvehlo.create');
    }

    public function store(TipvehRequest $request){

    	$tp = new tipsvehiculo;
    	$tp->idmarc = $request->idmarc;
    	$tp->nomTipo = $request->nomTipo;
    	$tp->save();

    	return redirect()->route('tipveh.index')
    					 ->with('info', 'creado con exito');
    }

    public function update(TipvehRequest $request, $id){

    	$tp=tipsvehiculo::find($id);
    	$tp->idmarc = $request->idmarc;	
    	$tp->nomTipo = $request->nomTipo;
    	$tp->save();
    	return redirect()->route('tipveh.index')
    					 ->with('info', 'Actualizado correctamente');
    }

 	public function edit($id){
    	
    	$tp=tipsvehiculo::find($id);
    	return view('tipvehlo.edit', compact('tp'));
    }

    public function show($id){
    	$tp=tipsvehiculo::find($id);
    	return view('tipvehlo.show', compact('tp'));
    }

    public function destroy($id){
    	$tp=tipsvehiculo::find($id);
    	$tp->delete();

    	return back()->with('info', 'Eliminado correctamente');
    }
}
