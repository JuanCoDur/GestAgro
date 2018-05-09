<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaquinariaRequest;
use App\maquinarias;
use App\fincas;
use App\marcas;
use App\Http\Requests\VehiculosRequest;
use Illuminate\Http\Request;

class MaquinariaController extends Controller
{
    public function index(){
        $maq=maquinarias::orderBy('id','DESC')->paginate();
        return view('maquinaria.maqindex', compact('maq'));
    }

    public function create(){
        $fin = fincas::all();
        $marc = marcas::all();
        return view('maquinaria.create', compact('fin','marc'));
    }

    public function store(MaquinariaRequest $request){

        $maq = new maquinarias;
        $maq->idFiinc = $request->idFiinc; //primer valor es la caja de texto, segundo es la BD
        $maq->idmarc = $request->idmarc;
        $maq->Combustible = $request->Combustible;
        $maq->Rendimiento = $request->Rendimiento;
        $maq->ModeloMaq = $request->ModeloMaq;
        $maq->yearFabricacion = $request->yearFabricacion;
        $maq->Adepreciacion = $request->Adepreciacion;
        $maq->valorActMaq = $request->ValorActMaq;
        $maq->Unidad = $request->Unidad;
        $maq->noSerieMotor = $request->noSerieMotor;
        $maq->save();

        return redirect()->route('maqui.index')
            ->with('info', 'Guardado con exito');
    }

    public function update(MaquinariaRequest $request, $id){

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
        $maq=maquinarias::find($id);
        return view('maquinaria.show', compact('maq'));
    }

    public function destroy($id){
        $veh=vehiculos::find($id);
        $veh->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
