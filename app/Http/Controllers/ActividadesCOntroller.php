<?php

namespace App\Http\Controllers;

use App\actividad;
use App\finca;
use App\Http\Requests\ActividadesRequest;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class ActividadesCOntroller extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){

    	$act= actividad::orderBy('id','DESC')->paginate();
    	return view('activ.actindex', compact('act'));
    }

	public function create(){
        $fin =finca::all();
    	$act = actividad::all();
    	return view('activ.create', compact('act','fin'));
    }

    public function store(ActividadesRequest $request){
    	$act = new actividad;
    	
    	$act->idFiinca = $request->idFiinca;
    	$act->NomPredio = $request->NomPredio;
    	$act->noLote = $request->noLote;
    	$act->actividadRealizada   = $request->actividadRealizada;
    	$act->empleadosInvolucrados   = $request->empleadosInvolucrados ;
    	$act->tiempoEmpleado    = $request->tiempoEmpleado ;
    	$act->vehInvolucrados = $request->vehInvolucrados;
    	$act->save();

    	return redirect()->route('activities.index')
    					 ->with('info', 'Actividad agregada correctamente');
    }

	public function edit($id){
    	$fin =finca::all();
    	$act  = actividad::find($id);
    	return view('activ.edit', compact('act','fin'));
    }

    public function update(ActividadesRequest $request, $id){
    	$act = actividad::find($id);

    	$act->idFiinca = $request->idFiinca;
    	$act->NomPredio = $request->NomPredio;
    	$act->noLote = $request->noLote;
    	$act->actividadRealizada   = $request->actividadRealizada;
    	$act->empleadosInvolucrados   = $request->empleadosInvolucrados ;
    	$act->tiempoEmpleado    = $request->tiempoEmpleado ;
    	$act->vehInvolucrados = $request->vehInvolucrados;
    	$act->save();

    	return redirect()->route('activities.index')
    					 ->with('info', 'Actividad actualizada');
    }

    public function show($id){
        $fin =finca::all();
    	$act = actividad::find($id);
    	return view('activ.show', compact('act','fin'));
    }

    public function destroy($id){

    	$act = actividad::findOrFail($id);
    	$act->delete();
        
    	return back()->with('info', 'El empleado fue eliminado');
    }
}
