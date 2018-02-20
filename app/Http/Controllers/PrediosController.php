<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\predios;
use App\fincas;
use App\Http\Requests\PrediosRequest;
use Illuminate\Support\Facades\View;

class PrediosController extends Controller
{
    public function index(){
    	$pre=predios::orderBy('id','DESC')->paginate();
    	return view('pred.preindex', compact('pre'));
    }

 	 public function create(){
    	$fin = fincas::all();
    	return view('pred.create', compact('fin'));
    }

    public function store(PrediosRequest $request){

    	$pre = new predios;
    	$pre->idFin = $request->idFin;
    	$pre->nombrePredio = $request->nombrePredio;
        $pre->numLote = $request->numLote;
    	$pre->superficie = $request->superficie;
    	$pre->regimenHumedad = $request->regimenHumedad;
    	$pre->tipRiego = $request->tipRiego;
        $pre->latitud = $request->latitud;
        $pre->longitud = $request->longitud;
        $pre->altitud = $request->altitud;
    	$pre->observaciones = $request->observaciones;
        
    	$pre->save();

    	return redirect()->route('predio.index')
    					 ->with('info', 'creado con exito');
    }

    public function update(PrediosRequest $request, $id){

    	$pre=predios::find($id);
    	$pre->idFin = $request->idFin;
    	$pre->nombrePredio = $request->nombrePredio;
        $pre->numLote = $request->numLote;
    	$pre->superficie = $request->superficie;
    	$pre->regimenHumedad = $request->regimenHumedad;
        $pre->tipRiego = $request->tipRiego;
        $pre->latitud = $request->latitud;
        $pre->longitud = $request->longitud;
        $pre->altitud = $request->altitud;
    	$pre->observaciones = $request->observaciones;
        $pre->save();

    	return redirect()->route('predio.index')
    					 ->with('info', 'Actualizado correctamente');
    }

 	public function edit($id){
    	$fin = fincas::all();
    	$pre=predios::find($id);
    	return view('pred.edit', compact('pre','fin'));
    }

    public function show($id){
    	$pre=predios::find($id);
    	return view('pred.show', compact('pre'));
    }

    public function destroy($id){
    	$pre=predios::find($id);
    	$pre->delete();

    	return back()->with('info', 'Eliminado correctamente');
    }
}
