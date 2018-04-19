<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>App | classONL</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
	<form>
		<h5>CFDI</h5>
	<div class="form-row">
     <div class="form-group col-md-2">
      <label>Clave</label>
      <input type="text" class="form-control" placeholder="CLave de Producto o servicio">
     </div>
     <div class="form-group col-md-1.5">
      <label>No. Identificación</label>
      <input type="text" class="form-control" placeholder="Numero de identificación">
     </div>
     <div class="form-group col-md-1.5">
      <label >Cantidad</label>
      <input type="text" class="form-control" placeholder="Cantidad">
     </div>
     <div class="form-group col-md-1.5">
      <label>Clave de unidad</label>
      <input type="text" class="form-control" placeholder="Clave de unidad">
     </div>
     <div class="form-group col-md-1">
      <label >Unidad</label>
      <input type="text" class="form-control" placeholder="Unidad">
     </div>
	 <div class="form-group col-md-2">
      <label>Descripcion</label>
      <input type="text" class="form-control" placeholder="Descripcion">
     </div>
     <div class="form-group col-md-1">
      <label >Valor Unitario</label>
      <input type="text" class="form-control" placeholder="Valor Unitario">
     </div>
     <div class="form-group col-md-2">
      <label>Importe</label>
      <input type="text" class="form-control" placeholder="Importe">
     </div>
     <div class="form-group col-md-1">
      <label >Descuento</label>
      <input type="text" class="form-control" placeholder="Descuento">
     </div>
   </div>
		<h5>Emisor</h5>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label>RFC</label>
      <input type="text" class="form-control" placeholder="RFC" maxlength="13">
    </div>
    <div class="form-group col-md-4">
      <label>Nombre</label>
      <input type="text" class="form-control" placeholder="Nombre">
    </div>
    <div class="form-group col-md-4">
      <label >Regimen Fiscal</label>
      <input type="text" class="form-control" placeholder="Regimen Fiscal">
    </div>
   </div>
   <h5>Receptor</h5>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label>RFC</label>
      <input type="text" class="form-control" placeholder="RFC" maxlength="13">
    </div>
    <div class="form-group col-md-4">
      <label>Nombre</label>
      <input type="text" class="form-control" placeholder="Nombre">
    </div>
    <div class="form-group col-md-4">
      <label for="inputAddress">Recidencia Fiscal</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="Dirección">
    </div>
    <div class="form-group col-md-4">
      <label for="inputAddress">Num. Registro Id.Trubitario</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="NumRegIdTrib">
    </div>
    <div class="form-group col-md-4">
      <label for="inputAddress">Uso CFDI</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="USO">
    </div>
  </div>
  <h5>Concepto</h5>
	<div class="form-row">
     <div class="form-group col-md-2">
      <label>Clave</label>
      <input type="text" class="form-control" placeholder="CLave de Producto o servicio" >
     </div>
     <div class="form-group col-md-1.5">
      <label>No. Identificación</label>
      <input type="text" class="form-control" placeholder="Numero de identificación">
     </div>
     <div class="form-group col-md-1.5">
      <label >Cantidad</label>
      <input type="text" class="form-control" placeholder="Cantidad">
     </div>
     <div class="form-group col-md-1.5">
      <label>Clave de unidad</label>
      <input type="text" class="form-control" placeholder="Clave de unidad">
     </div>
     <div class="form-group col-md-1">
      <label >Unidad</label>
      <input type="text" class="form-control" placeholder="Unidad">
     </div>
	 <div class="form-group col-md-2">
      <label>Descripcion</label>
      <input type="text" class="form-control" placeholder="Descripcion">
     </div>
     <div class="form-group col-md-1">
      <label >Valor Unitario</label>
      <input type="text" class="form-control" placeholder="Valor Unitario">
     </div>
     <div class="form-group col-md-2">
      <label>Importe</label>
      <input type="text" class="form-control" placeholder="Importe">
     </div>
     <div class="form-group col-md-1">
      <label >Descuento</label>
      <input type="text" class="form-control" placeholder="Descuento">
     </div>
   </div>
   <h4>Impuestos</h4>
   <h5>Retencion</h5>
   <h6>Retencion en comprovante</h6>
	<div class="form-row">
     <div class="form-group col-md-2">
      <label>Impuesto</label>
      <input type="text" class="form-control" placeholder="00algo">
     </div>
     <div class="form-group col-md-1.5">
      <label>Importe</label>
      <input type="text" class="form-control" placeholder="Importe">
     </div>
   </div>
   <h6>Retencion en concepto</h6>
	<div class="form-row">
     <div class="form-group col-md-2">
      <label>Clave</label>
      <input type="text" class="form-control" placeholder="CLave de Producto o servicio">
     </div>
     <div class="form-group col-md-1.5">
      <label>No. Identificación</label>
      <input type="text" class="form-control" placeholder="Numero de identificación">
     </div>
     <div class="form-group col-md-1.5">
      <label >Cantidad</label>
      <input type="text" class="form-control" placeholder="Cantidad">
     </div>
     <div class="form-group col-md-1.5">
      <label>Clave de unidad</label>
      <input type="text" class="form-control" placeholder="Clave de unidad">
     </div>
     <div class="form-group col-md-1">
      <label >Unidad</label>
      <input type="text" class="form-control" placeholder="Unidad">
     </div>
	 <div class="form-group col-md-2">
      <label>Descripcion</label>
      <input type="text" class="form-control" placeholder="Descripcion">
     </div>
     <div class="form-group col-md-1">
      <label >Valor Unitario</label>
      <input type="text" class="form-control" placeholder="Valor Unitario">
     </div>
     <div class="form-group col-md-2">
      <label>Importe</label>
      <input type="text" class="form-control" placeholder="Importe">
     </div>
     <div class="form-group col-md-1">
      <label >Descuento</label>
      <input type="text" class="form-control" placeholder="Descuento">
     </div>
   </div>
   <h5>Translado</h5>
   <h6>Translado en comprovante</h6>
	<div class="form-row">
     <div class="form-group col-md-2">
      <label>Impuesto</label>
      <input type="text" class="form-control" placeholder="Impuesto" >
     </div>
     <div class="form-group col-md-1.5">
      <label>Tipo de Factor</label>
      <input type="text" class="form-control" placeholder="TipoFactor">
     </div>
     <div class="form-group col-md-1.5">
      <label >Tasa o cuota</label>
      <input type="text" class="form-control" placeholder="Tasa o cuota">
     </div>
     <div class="form-group col-md-1.5">
      <label>Importe</label>
      <input type="text" class="form-control" placeholder="Importe">
     </div>
   </div>
   <h6>Translado en concepto</h6>
	<div class="form-row">
     <div class="form-group col-md-2">
      <label>Clave</label>
      <input type="text" class="form-control" placeholder="CLave de Producto o servicio">
     </div>
     <div class="form-group col-md-1.5">
      <label>No. Identificación</label>
      <input type="text" class="form-control" placeholder="Numero de identificación">
     </div>
     <div class="form-group col-md-1.5">
      <label >Cantidad</label>
      <input type="text" class="form-control" placeholder="Cantidad">
     </div>
     <div class="form-group col-md-1.5">
      <label>Clave de unidad</label>
      <input type="text" class="form-control" placeholder="Clave de unidad">
     </div>
     <div class="form-group col-md-1">
      <label >Unidad</label>
      <input type="text" class="form-control" placeholder="Unidad">
     </div>
	 <div class="form-group col-md-2">
      <label>Descripcion</label>
      <input type="text" class="form-control" placeholder="Descripcion">
     </div>
     <div class="form-group col-md-1">
      <label >Valor Unitario</label>
      <input type="text" class="form-control" placeholder="Valor Unitario">
     </div>
     <div class="form-group col-md-2">
      <label>Importe</label>
      <input type="text" class="form-control" placeholder="Importe">
     </div>
     <div class="form-group col-md-1">
      <label >Descuento</label>
      <input type="text" class="form-control" placeholder="Descuento">
     </div>
   </div>
   <h5>Informacion Aduanera</h5>
	<div class="form-row">
     <div class="form-group col-md-2">
      <label>Clave</label>
      <input type="text" class="form-control" placeholder="CLave de Producto o servicio">
     </div>
     <div class="form-group col-md-1.5">
      <label>No. Identificación</label>
      <input type="text" class="form-control" placeholder="Numero de identificación">
     </div>
     <div class="form-group col-md-1.5">
      <label >Cantidad</label>
      <input type="text" class="form-control" placeholder="Cantidad">
     </div>
     <div class="form-group col-md-1.5">
      <label>Clave de unidad</label>
      <input type="text" class="form-control" placeholder="Clave de unidad">
     </div>
     <div class="form-group col-md-1">
      <label >Unidad</label>
      <input type="text" class="form-control" placeholder="Unidad">
     </div>
	 <div class="form-group col-md-2">
      <label>Descripcion</label>
      <input type="text" class="form-control" placeholder="Descripcion">
     </div>
     <div class="form-group col-md-1">
      <label >Valor Unitario</label>
      <input type="text" class="form-control" placeholder="Valor Unitario">
     </div>
     <div class="form-group col-md-2">
      <label>Importe</label>
      <input type="text" class="form-control" placeholder="Importe">
     </div>
     <div class="form-group col-md-1">
      <label >Descuento</label>
      <input type="text" class="form-control" placeholder="Descuento">
     </div>
   </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html>