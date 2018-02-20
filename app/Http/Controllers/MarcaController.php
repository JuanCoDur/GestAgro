<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\marcas;
use App\Http\Requests\MarcaRequest;
use Illuminate\Support\Facades\View;

class MarcaController extends Controller
{
    public function index(){
    	$marc=marcas::orderBy('id','DESC')->paginate();
    	return view('marca.marindex', compact('marc'));
    }

 	 public function create(){
    	
    	return view('marca.create');
    }

    public function store(MarcaRequest $request){

    	$marc = new marcas;
    	
    	$marc->nomMarca = $request->nomMarca;
    	$marc->save();

    	return redirect()->route('marcas.index')
    					 ->with('info', 'El producto fue creado');
    }

    public function update(MarcaRequest $request, $id){

    	$marc= marcas::find($id);

    	$marc->nomMarca = $request->nomMarca;
    	$marc->save();
    	return redirect()->route('marcas.index')
    					 ->with('info', 'El producto fue actualizado');
    }

 	public function edit($id){
    	
    	$marc=marcas::find($id);
    	return view('marca.edit', compact('marc'));
    }

    public function show($id){
    	$marc=marcas::find($id);
    	return view('marca.show', compact('marc'));
    }

    public function destroy($id){
    	$marc=marcas::find($id);
    	$marc->delete();

    	return back()->with('info', 'La marca fue eliminada');
    }
}
