<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cliente;
use App\Http\Requests\ClientesRequest;
use Illuminate\Support\Facades\View;

class ClientesController extends Controller
{
     public function __construct(){
        $this->middleware('auth');
    }
     public function index(){
    	$cli=cliente::orderBy('id','DESC')->paginate();
    	return view('client.clindex', compact('cli'));
    }

 	 public function create(){
    	$cli = cliente::all();
    	return view('client.create', compact('cli'));
    }

    public function store(ClientesRequest $request){

    	$cli = new cliente;
    	
    	$cli->nomCte = $request->nomCte;
    	$cli->domCte = $request->domCte;
    	$cli->telCte = $request->telCte;
    	$cli->emailCte = $request->emailCte;
    	$cli->RFCte = $request->RFCte;
    	$cli->save();

    	return redirect()->route('client.index')
    					 ->with('info', 'Creado correctamente');
    }

    public function update(ClientesRequest $request, $id){

    	$cli= cliente::find($id);

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
    	
    	$cli=cliente::find($id);
    	return view('cliente.edit', compact('cli'));
    }

    public function show($id){
    	$cli=cliente::find($id);
    	return view('cliente.show', compact('cli'));
    }

    public function destroy($id){
    	$cli=cliente::find($id);
    	$cli->delete();

    	return back()->with('info', 'Campo eliminado correctamente');
    }
}
