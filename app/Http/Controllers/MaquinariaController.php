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
    public function __construct(){
        $this->middleware('auth');
    }
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

        $maq=maquinarias::find($id);
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
            ->with('info', 'Actualizado correctamente');
    }

    public function edit($id){
        $fin = fincas::all();
        $marc = marcas::all();
        $maq = maquinarias::find($id);
        return view('maquinaria.edit', compact('fin','marc', 'maq'));
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
