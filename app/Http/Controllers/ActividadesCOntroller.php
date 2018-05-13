<?php

namespace App\Http\Controllers;

use App\actividades;
use App\Http\Requests\ActividadesRequest;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;

class ActividadesCOntroller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){

    	$act= actividades::orderBy('id','DESC')->paginate();
    	return view('activ.actindex', compact('act'));
    }

	public function create(){
    	$act = actividades::all();
    	return view('activ.create', compact('act'));
    }

    public function store(ActividadesRequest $request){
    	$act = new actividades;
    	
    	$act->idFiinca = $request->idFiinca;
    	$act->NomPredio = $request->NomPredio;
    	$act->noLote = $request->noLote;
    	$act->actividadRealizada   = $request->actividadRealizada;
    	$act->empleadosInvolucrados   = $request->empleadosInvolucrados ;
    	$act->tiempoEmpleado    = $request->tiempoEmpleado ;
    	$act->vehInvolucrados = $request->vehInvolucrados;
    	$finc->save();

    	return redirect()->route('activities.index')
    					 ->with('info', 'Actividad agregada correctamente');
    }

	public function edit($id){
    	
    	$act  = actividades::find($id);
    	return view('activ.edit', compact('act'));
    }

    public function update(ActividadesRequest $request, $id){
    	$act = actividades::find($id);

    	$act->idFiinca = $request->idFiinca;
    	$act->NomPredio = $request->NomPredio;
    	$act->noLote = $request->noLote;
    	$act->actividadRealizada   = $request->actividadRealizada;
    	$act->empleadosInvolucrados   = $request->empleadosInvolucrados ;
    	$act->tiempoEmpleado    = $request->tiempoEmpleado ;
    	$act->vehInvolucrados = $request->vehInvolucrados;
    	$finc->save();

    	return redirect()->route('activities.index')
    					 ->with('info', 'Actividad actualizada');
    }

    public function show($id){

    	$act = actividades::find($id);
    	return view('activ.show', compact('act'));
    }

    public function destroy($id){

    	$act = actividades::find($id);
    	$act->delete();

    	return back()->with('info', 'Actividad eliminada');
    }
}
