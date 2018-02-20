<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productos;
use App\clasificaciones;

use App\Http\Requests\ProductosRequest;
use Illuminate\Support\Facades\View;

class ProductosController extends Controller
{
    public function index(){
    	$prodd=productos::orderBy('id','DESC')->paginate();
    	return view('produc.prodindex', compact('prodd'));
    }

 	 public function create(){
    	$class = clasificaciones::all();
    	return view('produc.create', compact('class'));
    }

    public function store(ProductosRequest $request){

    	$prodd = new productos;
    	
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

    	$prodd= productos::find($id);

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
    	$class = clasificaciones::all();
    	$prodd=productos::find($id);
    	return view('produc.edit', compact('prodd','class'));
    }

    public function show($id){
    	$prodd=productos::find($id);
    	return view('produc.show', compact('prodd'));
    }

    public function destroy($id){
    	$prodd=productos::find($id);
    	$prodd->delete();

    	return back()->with('info', 'Campo eliminado correctamente');
    }
}
