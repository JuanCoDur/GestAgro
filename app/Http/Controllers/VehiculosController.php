<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vehiculos;
use App\fincas;
use App\marcas;
use App\tipsvehiculos;
use App\Http\Requests\VehiculosRequest;
use Illuminate\Support\Facades\View;

class VehiculosController extends Controller
{
    public function index(){
    	$veh=vehiculos::orderBy('id','DESC')->paginate();
    	return view('vehi.vehindex', compact('veh'));
    }

 	 public function create(){
    	$fin = fincas::all();
        $marc = marcas::all();
        $tipv = tipsvehiculos::all();
    	return view('vehi.create', compact('fin','marc','tipv'));
    }

    public function store(VehiculosRequest $request){

    	$veh = new vehiculos;
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

    	$veh=vehiculos::find($id);
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
    	$fin = fincas::all();
        $marc = marcas::all();
        $tipv = tipsvehiculos::all();
    	$veh=vehiculos::find($id);
    	return view('vehi.edit', compact('veh','fin','marc','tipv'));
    }

    public function show($id){
    	$veh=vehiculos::find($id);
    	return view('vehi.show', compact('veh'));
    }

    public function destroy($id){
    	$veh=vehiculos::find($id);
    	$veh->delete();

    	return back()->with('info', 'Eliminado correctamente');
    }
}
