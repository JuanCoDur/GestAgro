<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producto;
use App\clasificacion;

use App\Http\Requests\ProductosRequest;
use Illuminate\Support\Facades\View;

class ProductosController extends Controller
{
    public function index(){
    	$prodd=producto::orderBy('id','DESC')->paginate();
    	return view('produc.prodindex', compact('prodd'));
    }

 	 public function create(){
    	$class = clasificacion::all();
    	return view('produc.create', compact('class'));
    }

    public function store(ProductosRequest $request){

    	$prodd = new producto;
    	
    	$prodd->idClasif = $request->idClasif;
    	$prodd->nomProducto = $request->nomProducto;
    	$prodd->descripcion = $request->descripcion;
    	$prodd->costo = $request->costo;
    	$prodd->preciovta = $request->preciovta;
    	$prodd->save();

    	return redirect()->route('prod.index')
    					 ->with('info', 'Creado correctamente');
    }

    public function update(ProductosRequest $request, $id){

    	$prodd= producto::find($id);

    	$prodd->idClasif = $request->idClasif;
    	$prodd->nomProducto = $request->nomProducto;
    	$prodd->descripcion = $request->descripcion;
    	$prodd->costo = $request->costo;
    	$prodd->preciovta = $request->preciovta;
    	$prodd->save();
    	return redirect()->route('prod.index')
    					 ->with('info', 'Actualizado correctamente');
    }

 	public function edit($id){
    	$class = clasificacion::all();
    	$prodd=producto::find($id);
    	return view('produc.edit', compact('prodd','class'));
    }

    public function show($id){
    	$prodd=producto::find($id);
    	return view('produc.show', compact('prodd'));
    }

    public function destroy($id){
    	$prodd=producto::find($id);
    	$prodd->delete();

    	return back()->with('info', 'Campo eliminado correctamente');
    }
}
