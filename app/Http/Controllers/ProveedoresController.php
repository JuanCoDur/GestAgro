<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proveedor;
use App\Http\Requests\ProveedoresRequest;
use Illuminate\Support\Facades\View;

class ProveedoresController extends Controller
{   
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
    	$prove=proveedor::orderBy('id','DESC')->paginate();
    	return view('proveedr.provindex', compact('prove'));
    }

 	 public function create(){
    	return view('proveedr.create');
    }

    public function store(ProveedoresRequest $request){

    	$prove = new proveedor;
    	$prove->RFCProv = $request->RFCProv;
    	$prove->nomProv = $request->nomProv;
    	$prove->domProv = $request->domProv;
    	$prove->telProv = $request->telProv;
    	$prove->emailProv = $request->emailProv;
    	$prove->empresaProv = $request->empresaProv;
    	$prove->save();

    	return redirect()->route('prov.index')
    					 ->with('info', 'Creado correctamente');
    }

    public function update(ProveedoresRequest $request, $id){

    	$prove= proveedor::find($id);

    	$prove->RFCProv = $request->RFCProv;
    	$prove->nomProv = $request->nomProv;
    	$prove->domProv = $request->domProv;
    	$prove->telProv = $request->telProv;
    	$prove->emailProv = $request->emailProv;
    	$prove->empresaProv = $request->empresaProv;
    	$prove->save();
    	return redirect()->route('prov.index')
    					 ->with('info', 'Actualizado correctamente');
    }

 	public function edit($id){
    	
    	$prove=proveedor::find($id);
    	return view('proveedr.edit', compact('prove'));
    }

    public function show($id){
    	$prove=proveedor::find($id);
    	return view('proveedr.show', compact('prove'));
    }

    public function destroy($id){
    	$prove=proveedor::find($id);
    	$prove->delete();

    	return back()->with('info', 'Eliminado con exito');
    }
}
