<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vehiculo;
use App\finca;
use App\marca;
use App\tipsvehiculo;
use App\Http\Requests\VehiculosRequest;
use Illuminate\Support\Facades\View;

class VehiculosController extends Controller
{   
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
    	$veh=vehiculo::orderBy('id','DESC')->paginate();
    	return view('vehi.vehindex', compact('veh'));
    }

 	 public function create(){
    	$fin = finca::all();
        $marc = marca::all();
        $tipv = tipsvehiculo::all();
    	return view('vehi.create', compact('fin','marc','tipv'));
    }

    public function store(VehiculosRequest $request){

    	$veh = new vehiculo;
    	$veh->idTipoV = $request->idTipoV;
    	$veh->idFinca = $request->idFinca;
        $veh->idmarc = $request->idmarc;
    	$veh->Marca = $request->Marca;
    	$veh->Combustible = $request->Combustible;
    	$veh->Rendimiento = $request->Rendimiento;
    	$veh->ModeloVeh = $request->ModeloVeh;
        $veh->yearFabricacion = $request->yearFabricacion;
    	$veh->Adepreciacion = $request->Adepreciacion;
    	$veh->ValorActVeh = $request->ValorActVeh;
        $veh->Placa = $request->Placa;
    	$veh->save();

    	return redirect()->route('vehic.index')
    					 ->with('info', 'creado con exito');
    }

    public function update(VehiculosRequest $request, $id){

    	$veh=vehiculo::find($id);
    	$veh->idTipoV = $request->idTipoV;
    	$veh->idFinca = $request->idFinca;
        $veh->idmarc = $request->idmarc;
    	$veh->Marca = $request->Marca;
    	$veh->Combustible = $request->Combustible;
    	$veh->Rendimiento = $request->Rendimiento;
    	$veh->ModeloVeh = $request->ModeloVeh;
        $veh->yearFabricacion = $request->yearFabricacion;
    	$veh->Adepreciacion = $request->Adepreciacion;
    	$veh->ValorActVeh = $request->ValorActVeh;
        $veh->Placa = $request->Placa;
    	$veh->save();
    	return redirect()->route('vehic.index')
    					 ->with('info', 'Actualizado correctamente');
    }

 	public function edit($id){
    	$fin = finca::all();
        $marc = marca::all();
        $tipv = tipsvehiculo::all();
    	$veh=vehiculo::find($id);
    	return view('vehi.edit', compact('veh','fin','marc','tipv'));
    }

    public function show($id){
    	$veh=vehiculo::find($id);
    	return view('vehi.show', compact('veh'));
    }

    public function destroy($id){
    	$veh=vehiculo::find($id);
    	$veh->delete();

    	return back()->with('info', 'Eliminado correctamente');
    }
}
