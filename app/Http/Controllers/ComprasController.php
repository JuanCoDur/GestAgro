<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Request\ComprasRequest;
use App\compras;
use App\detallescompras;
use DB;
use Carbon\Carbon;
use Resposnse;
use Illuminate\Support\Collection;
class ComprasController extends Controller
{
   public function __construct()
   {

   }
   public function index(Request $request)
   {
   		if ($request) {
   			$query=trim($request->get('searchText'));
   			$ingresos=DB::table('compras as i')
   			->join('proveedores as p','i.idProv','=','p.id')
   			->join('detallescompras as d','i.folioCra','=','d.FolCpra')
   			->select('i.folioCra','i.fecCompra','p.nomProv',DB::raw('sum(d.cantidadCom*precioCom)as total'))
   			->where('i.folioCra','LIKE','%'.$query.'%')
   			->orderBy('i.folioCra','desc')
   			->groupBy('i.folioCra','i.fecCompra','p.nomProv')
   			->paginate(7);
   			return view('compras.ingreso.comindex',["compras"=>$ingresos,"searchText"=>$query]);
   		}
   }
   public function create(){
   		$prov=DB::table('proveedores')->get();
   		$productos = DB::table('productos as producs')
   			->select('nomProducto','id')
   			->get();
   		return view("compras.ingreso.create",["proveedores"=$prov,"productos"=>$producs]); 
   }
   public function store(ComprasRequest $request){
   	try {
   		DB::beginTransaction();
   			$compr = new compras;
   			$compr->
   		DB::commit();
   	} catch (\Exception $e) {
   		DB::rollback();
   	}

   }
}
