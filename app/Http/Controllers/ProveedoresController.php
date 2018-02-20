<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proveedores;
use App\Http\Requests\ProveedoresRequest;
use Illuminate\Support\Facades\View;

class ProveedoresController extends Controller
{
    public function index(){
    	$prove=proveedores::orderBy('id','DESC')->paginate();
    	return view('proveedr.provindex', compact('prove'));
    }

 	 public function create(){
    	return view('proveedr.create');
    }

    public function store(ProveedoresRequest $request){

    	$prove = new proveedores;
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

    	$prove= proveedores::find($id);

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
    	
    	$prove=proveedores::find($id);
    	return view('proveedr.edit', compact('prove'));
    }

    public function show($id){
    	$prove=proveedores::find($id);
    	return view('proveedr.show', compact('prove'));
    }

    public function destroy($id){
    	$prove=proveedores::find($id);
    	$prove->delete();

    	return back()->with('info', 'Campo eliminado correctamente');
    }
}
