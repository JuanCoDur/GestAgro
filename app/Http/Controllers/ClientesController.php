<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clientes;
use App\Http\Requests\ClientesRequest;
use Illuminate\Support\Facades\View;

class ClientesController extends Controller
{
     public function index(){
    	$cli=clientes::orderBy('id','DESC')->paginate();
    	return view('client.clindex', compact('cli'));
    }

 	 public function create(){
    	$cli = clientes::all();
    	return view('client.create', compact('cli'));
    }

    public function store(ClientesRequest $request){

    	$cli = new clientes;
    	
    	$cli->nomCte = $request->nomCte;
    	$cli->domCte = $request->domCte;
    	$cli->telCte = $request->telCte;
    	$cli->emailCte = $request->emailCte;
    	$cli->RFCte = $request->RFCte;
    	$cli->save();

    	return redirect()->route('clients.index')
    					 ->with('info', 'Creado correctamente');
    }

    public function update(ClientesRequest $request, $id){

    	$cli= clientes::find($id);

    	$cli->nomCte = $request->nomCte;
    	$cli->domCte = $request->domCte;
    	$cli->telCte = $request->telCte;
    	$cli->emailCte = $request->emailCte;
    	$cli->RFCte = $request->RFCte;
    	$cli->save();
    	return redirect()->route('clients.index')
    					 ->with('info', 'Actualizado correctamente');
    }

 	public function edit($id){
    	
    	$cli=clientes::find($id);
    	return view('client.edit', compact('cli'));
    }

    public function show($id){
    	$cli=clientes::find($id);
    	return view('client.show', compact('cli'));
    }

    public function destroy($id){
    	$cli=clientes::find($id);
    	$cli->delete();

    	return back()->with('info', 'Campo eliminado correctamente');
    }
}
