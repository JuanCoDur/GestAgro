<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clasificaciones;
use App\Http\Requests\ClasRequest;
use Illuminate\Support\Facades\View;

class ClasController extends Controller
{
     public function index(){
    	$class=clasificaciones::orderBy('id','DESC')->paginate();
    	return view('clasif.clasindex', compact('class'));
    }

 	 public function create(){
    	
    	return view('clasif.create');
    }

    public function store(ClasRequest $request){

    	$class = new clasificaciones;
    	
    	$class->nomClasif = $request->nomClasif;
    	$class->save();

    	return redirect()->route('clasifi.index')
    					 ->with('info', 'Creado correctamente');
    }

    public function update(ClasRequest $request, $id){

    	$class= clasificaciones::find($id);

    	$class->nomClasif = $request->nomClasif;
    	$class->save();
    	return redirect()->route('clasifi.index')
    					 ->with('info', 'Actualizado correctamente');
    }

 	public function edit($id){
    	
    	$class=clasificaciones::find($id);
    	return view('clasif.edit', compact('class'));
    }

    public function show($id){
    	$class=clasificaciones::find($id);
    	return view('clasif.show', compact('class'));
    }

    public function destroy($id){
    	$class=clasificaciones::find($id);
    	$class->delete();

    	return back()->with('info', 'Campo eliminado correctamente');
    }
}
