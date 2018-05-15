<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pozo;
use App\finca;
use App\Http\Requests\PozosRequest;
use Illuminate\Support\Facades\View;

class PozosController extends Controller
{   
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
    	$poz=pozo::orderBy('id','DESC')->paginate();
    	return view('poozos.pozoindex', compact('poz'));
    }

 	 public function create(){
        $fin =finca::all();
    	$poz = pozo::all();
    	return view('poozos.create', compact('poz','fin'));
    }

    public function store(PozosRequest $request){

    	$poz = new pozo;
    	$poz->idFiin = $request->idFiin;
    	$poz->pozo = $request->pozo;
        $poz->medidor = $request->medidor;
    	$poz->ubicacionPzo = $request->ubicacionPzo;
        $poz->latitud = $request->latitud;
        $poz->longitud = $request->longitud;
        $poz->altitud = $request->altitud;
//    	$poz->observaciones = $request->observaciones;
        
    	$poz->save();

    	return redirect()->route('pozo.index')
    					 ->with('info', 'creado con exito');
    }

    public function update(PozosRequest $request, $id){

    	$poz=pozo::find($id);
    	$poz->idFiin = $request->idFiin;
    	$poz->pozo = $request->pozo;
        $poz->medidor = $request->medidor;
    	$poz->ubicacionPzo = $request->ubicacionPzo;
        $poz->latitud = $request->latitud;
        $poz->longitud = $request->longitud;
        $poz->altitud = $request->altitud;
  //  	$poz->observaciones = $request->observaciones;
        
    	$poz->save();

    	return redirect()->route('pozo.index')
    					 ->with('info', 'Actualizado correctamente');
    }

 	public function edit($id){
        $fin =finca::all();
    	$poz=pozo::find($id);
    	return view('poozos.edit', compact('poz','fin'));
    }

    public function show($id){
        $fin =finca::all();
    	$poz=pozo::find($id);
    	return view('poozos.show', compact('poz','fin'));
    }

    public function destroy($id){
    	$poz =pozo::findOrFail($id);
        $poz->delete();
        
        return back()->with('info', 'Eliminado con exito');
    }
}
