<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\empleado;
use App\finca;
use App\Http\Requests\EmpleadoRequest;
use Illuminate\Support\Facades\View;

class EmpleadoController extends Controller
{

	 public function index(){

    	$emp= empleado::orderBy('id','DESC')->paginate();
    	return view('empleado.empindex', compact('emp'));
    }

    public function create(){
        $fin =finca::all();
    	return view('empleado.create', compact('fin'));
    }

    public function store(EmpleadoRequest $request){

    	
    	$emplea = new empleado;
    	$emplea ->fin_id = $request->fin_id;
    	$emplea ->nomemp = $request->nomemp;
    	$emplea ->edademp = $request->edademp;
    	$emplea ->edocivil = $request->edocivil;
    	$emplea ->depmenor = $request->depmenor;
    	$emplea ->depmayor = $request->depmayor;
    	$emplea ->discapacidades = $request->discapacidades;
    	$emplea ->domemp = $request->domemp;
    	$emplea ->telcasa = $request->telcasa;
    	$emplea ->celemp = $request->celemp;
    	$emplea ->email = $request->email;
    	$emplea ->preparacion = $request->preparacion;
    	$emplea ->sueldonto = $request->sueldonto;
    	$emplea ->cargo = $request->cargo;
    	$emplea ->jefedirecto = $request->jefedirecto;
    	$emplea ->subordinados = $request->subordinados;

    	$emplea->save();

    	return redirect()->route('empleado.index')
    					 ->with('info', 'El empleado fue guardado');
    }

    public function update(EmpleadoRequest $request, $id){

    	$emplea = empleado::find($id);

    	$emplea ->nomemp = $request->nomemp;
    	$emplea ->edademp = $request->edademp;
    	$emplea ->edocivil = $request->edocivil;
    	$emplea ->depmenor = $request->depmenor;
    	$emplea ->depmayor = $request->depmayor;
    	$emplea ->discapacidades = $request->discapacidades;
    	$emplea ->domemp = $request->domemp;
    	$emplea ->telcasa = $request->telcasa;
    	$emplea ->celemp = $request->celemp;
    	$emplea ->email = $request->email;
    	$emplea ->preparacion = $request->preparacion;
    	$emplea ->sueldonto = $request->sueldonto;
    	$emplea ->cargo = $request->cargo;
    	$emplea ->jefedirecto = $request->jefedirecto;
    	$emplea ->subordinados = $request->subordinados;

    	$emplea->save();

    	return redirect()->route('empleado.index')
    					 ->with('info', 'El empleado fue actualizado');
    }

    public function edit($id){
        $fin =finca::all();
    	$emplea = empleado::find($id);
    	return view('empleado.edit', compact('emplea','fin'));
    }

    public function show($id){

    	$emplea = empleado::find($id);
    	return view('empleado.show', compact('emplea'));
    }

    public function destroy($id){

    	$emplea = empleado::find($id);
    	$emplea->delete();

    	return back()->with('info', 'El empleado fue eliminado');

    }

     public function empleadoscrod(){

        return view('empleadoscrod');
    }
}
