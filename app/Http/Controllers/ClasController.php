<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clasificacion;
use App\Http\Requests\ClasRequest;
use Illuminate\Support\Facades\View;

class ClasController extends Controller
{
     public function __construct(){
        $this->middleware('auth');
    }
     public function index(){
    	$class=clasificacion::orderBy('id','DESC')->paginate('7');
    	return view('clasif.clasindex', compact('class'));
    }

 	 public function create(){
    	
    	return view('clasif.create');
    }

    public function store(ClasRequest $request){

    	$class = new clasificacion;
    	
    	$class->nomClasif = $request->nomClasif;
    	$class->save();

    	return redirect()->route('clasifi.index')
    					 ->with('info', 'Creado correctamente');
    }

    public function update(ClasRequest $request, $id){

    	$class= clasificacion::find($id);

    	$class->nomClasif = $request->nomClasif;
    	$class->save();
    	return redirect()->route('clasifi.index')
    					 ->with('info', 'Actualizado correctamente');
    }

 	public function edit($id){
    	
    	$class=clasificacion::find($id);
    	return view('clasif.edit', compact('class'));
    }

    public function show($id){
    	$class=clasificacion::find($id);
    	return view('clasif.show', compact('class'));
    }

    public function destroy($id){
    	$class=clasificacion::find($id);
    	$class->delete();

    	return back()->with('info', 'Campo eliminado correctamente');
    }
}
