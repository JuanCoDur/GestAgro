<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pozos;
use App\Http\Requests\PozosRequest;
use Illuminate\Support\Facades\View;

class PozosController extends Controller
{
    
    public function index(){
    	$poz=pozos::orderBy('id','DESC')->paginate();
    	return view('poozos.pozoindex', compact('poz'));
    }

 	 public function create(){
    	$poz = pozos::all();
    	return view('poozos.create', compact('poz'));
    }

    public function store(PozosRequest $request){

    	$poz = new pozos;
    	$poz->idFiin = $request->idFiin;
    	$poz->pozo = $request->pozo;
        $poz->medidor = $request->medidor;
    	$poz->ubicacionPzo = $request->ubicacionPzo;
        $poz->latitud = $request->latitud;
        $poz->longitud = $request->longitud;
        $poz->altitud = $request->altitud;
    	$poz->observaciones = $request->observaciones;
        
    	$poz->save();

    	return redirect()->route('pozo.index')
    					 ->with('info', 'creado con exito');
    }

    public function update(PozosRequest $request, $id){

    	$poz=pozos::find($id);
    	$poz->idFiin = $request->idFiin;
    	$poz->pozo = $request->pozo;
        $poz->medidor = $request->medidor;
    	$poz->ubicacionPzo = $request->ubicacionPzo;
        $poz->latitud = $request->latitud;
        $poz->longitud = $request->longitud;
        $poz->altitud = $request->altitud;
    	$poz->observaciones = $request->observaciones;
        
    	$poz->save();

    	return redirect()->route('pozo.index')
    					 ->with('info', 'Actualizado correctamente');
    }

 	public function edit($id){
    	$poz=pozos::find($id);
    	return view('poozos.edit', compact('poz'));
    }

    public function show($id){
    	$poz=pozos::find($id);
    	return view('poozos.show', compact('poz'));
    }

    public function destroy($id){
    	$poz=pozos::find($id);
    	$poz->delete();

    	return back()->with('info', 'Eliminado correctamente');
    }
}
