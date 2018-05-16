<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\compra;
use App\finca;
use App\proveedor;
use App\producto;
use DB;
use App\detallecompra;
use App\Http\Requests\ComprasRequest;
use Illuminate\Support\Facades\View;
//use Illuminate\Support\Facades\Redirect;

use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;


class ComprasController extends Controller
{
     public function __construct(){
        $this->middleware('auth');
    }
    public function index(Requests $request){
    	if ($request) {
    		$query=trim($request->get('searchText'));
    		$compr=DB::table('compras as c')
    		 ->join('proveedores as p', 'c.idProv','=','p.id')
    		 ->join('detallescompras as dc','c.folioCra','=','dc.FolCpra')
    		 ->select('c.folioCra','c.fecCompra','p.nomProv',DB::raw('sum(dc.cantidadCom*precioCom) as total'))
    		 ->where('c.folioCra','LIKE','%'.$query.'%')
    		 ->orderBy('c.folioCra','DESC')	
    		 ->groupBy('c.folioCra','c.fecCompra','p.nomProv')
    		 ->paginate('7');
    		 return view('compr.coindex', compact('query','compr'));

    		} 
    	//$com= compra::orderBy('id','DESC')->paginate();
    	//return view('compr.coindex', compact('com'));
    }

    public function create(){
    	$prov=DB::table('proveedores');
    	$produ=DB::table('productos as prod')
    		->select('prod.nomProducto','prod.id')
    		->get();
    	return view('compr.create',["provee"=>$prov,"producc"=>$produ]);
    }
    public function store (ComprasRequest $request){
    	try {
    		DB::beginTransaction();
    		$com=new compra;
    		//datos del modelo compra
    		$com->idFnca=$request->get('idFnca');//atributo de la bd se le manda lo que tiene el formulario 
    		$com->idProv=$request->get('idProv');
    		$mytime= Carbon::now('America/Mexico_City');
    		$com->fecCompra=$mytime->toDateTimeString();
    		$com->totalCompra=$request->get('totalCompra');
    		$com->save()
    		//(para que sean introducidos por el us)datos de detallecompra se crea una variable cualquiera que seran convertidas en array y tambien toman del formulario
    		$idPro=$request->get('idPro');
    		$cantidadCom=$request->get('cantidadCom');
    		$precioCom=$request->get('precioCom');
    		//array creado el se jecuta mientras que el contador sea menor de los idprod
    		$contador = 0;
    		while ($contador < count($idPro)) {
    			$detalle= new detallescompras();
    			$detalle->FolCpra=$com->FolCpra;//en detalle ingreso se va guardar  la variable$com ya que se autogenero ya que $com se esta guardando
    			$detalle->idPro=$idPro[$contador];//se llena con el array
    			$detalle->cantidadCom=$cantidadCom[$contador];
    			$detalle->precioCom=$precioCom[$contador];
    			$contador=$contador+1;
    		}

    		DB::commit();
    	} catch (Exception $e) {
    		DB::rollback();
    	}

    	return Redirect::to('comp');
    }

    public function show($id){
    	$com=DB::table('compras as c')
    		 ->join('proveedores as p', 'c.idProv','=','p.id')
    		 ->join('detallescompras as dc','c.folioCra','=','dc.FolCpra')
    		 ->select('c.folioCra','c.fecCompra','p.nomProv',DB::raw('sum(dc.cantidadCom*precioCom) as total'))
    		 ->where('c.folioCra','=',$id)	//se obtiene solo el ingreso que esta recibiendo show
    		 ->first();

    		 $detalle=DB::table('detallescompras as dc')
    		 ->join('productos as p','dc.idPro','=','p.id')
    		 ->select('p.nomProducto as produucto','dc.cantidadCom','dc.precioCom')
    		 ->	where('dc.FolCpra','=',$id)
    		 ->get();
    	return view("compr.show",["com"=$com,"detalle"=$detalle]);
    }

    public function destroy(){
    	$com=compra::findOrFalil($id);
    	$com=update();
    	return Redirect::to('copr')
    }
}
