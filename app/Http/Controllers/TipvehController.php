<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipsvehiculos;
use App\Http\Requests\TipvehRequest;
use Illuminate\Support\Facades\View;

class TipvehController extends Controller
{
    public function index(){
    	$tp=tipsvehiculos::orderBy('id','DESC')->paginate();
    	return view('tipvehlo.tpindex', compact('tp'));
    }

 	 public function create(){
    	
    	return view('tipvehlo.create');
    }

    public function store(TipvehRequest $request){

    	$tp = new tipsvehiculos;
    	$tp->idmarc = $request->idmarc;
    	$tp->nomTipo = $request->nomTipo;
    	$tp->save();

    	return redirect()->route('tipveh.index')
    					 ->with('info', 'creado con exito');
    }

    public function update(TipvehRequest $request, $id){

    	$tp=tipsvehiculos::find($id);
    	$tp->idmarc = $request->idmarc;	
    	$tp->nomTipo = $request->nomTipo;
    	$tp->save();
    	return redirect()->route('tipveh.index')
    					 ->with('info', 'Actualizado correctamente');
    }

 	public function edit($id){
    	
    	$tp=tipsvehiculos::find($id);
    	return view('tipvehlo.edit', compact('tp'));
    }

    public function show($id){
    	$tp=tipsvehiculos::find($id);
    	return view('tipvehlo.show', compact('tp'));
    }

    public function destroy($id){
    	$tp=tipsvehiculos::find($id);
    	$tp->delete();

    	return back()->with('info', 'Eliminado correctamente');
    }
}
