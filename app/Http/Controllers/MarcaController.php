<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\marca;
use App\Http\Requests\MarcaRequest;
use Illuminate\Support\Facades\View;

class MarcaController extends Controller
{   
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
    	$marc=marca::orderBy('id','DESC')->paginate();
    	return view('marca.marindex', compact('marc'));
    }

 	 public function create(){
    	
    	return view('marca.create');
    }

    public function store(MarcaRequest $request){

    	$marc = new marca;
    	
    	$marc->nomMarca = $request->nomMarca;
    	$marc->save();

    	return redirect()->route('marca.index')
    					 ->with('info', 'El producto fue creado');
    }

    public function update(MarcaRequest $request, $id){

    	$marc= marca::find($id);

    	$marc->nomMarca = $request->nomMarca;
    	$marc->save();
    	return redirect()->route('marca.index')
    					 ->with('info', 'El producto fue actualizado');
    }

 	public function edit($id){
    	
    	$marc=marca::find($id);
    	return view('marca.edit', compact('marc'));
    }

    public function show($id){
    	$marc=marca::find($id);
    	return view('marca.show', compact('marc'));
    }

    public function destroy($id){
    	$marc =marca::findOrFail($id);
        $marc->delete();
        
        return back()->with('info', 'Eliminado con exito');
    }
}
