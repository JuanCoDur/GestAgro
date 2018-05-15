<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\predio;
use App\finca;
use App\Http\Requests\PrediosRequest;
use Illuminate\Support\Facades\View;

class PrediosController extends Controller
{   
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
    	$pre=predio::orderBy('id','DESC')->paginate();
    	return view('pred.preindex', compact('pre'));
    }

 	 public function create(){
    	$fin = finca::all();
       
    	return view('pred.create', compact('fin'));
    }

    public function store(PrediosRequest $request){

    	$pre = new predio;
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

    	$pre=predio::find($id);
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
    	$fin = finca::all();
    	$pre=predio::find($id);
    	return view('pred.edit', compact('pre','fin'));
    }

    public function show($id){
        $fin = finca::all();
    	$pre=predio::find($id);
    	return view('pred.show', compact('pre','fin'));
    }

    public function destroy($id){
    	$pre =predio::findOrFail($id);
        $pre->delete();
        
        return back()->with('info', 'Eliminado con exito');
    }
}
