
<div class="form-group row">
	<label for="nomfinca" class="col-md-2 col-form-label">Finca perteneciente</label>
	<div class="col-sm-8">
	    <select name="fin_id" id="fin_id" class="form-control">
	    	<option value="">Finca donde labora</option>
	    	@foreach($fin as $finca)
	    		<option value="{{ $finca['id'] }}" >{{ $finca['nomfinca'] }}</option>
	    	@endforeach
	    </select>
	</div>															
</div>

<div class="form-group row">
	<label for="nomemp" class="col-md-2 col-form-label">Nombre</label>
    <div class="col-sm-8">
		<input id="nomemp" type="text" class="form-control" name="nomemp" placeholder="Nombre completo">
        	@if ($errors->has('nomemp'))
            	<span class="help-block">
                	<strong>{{ $errors->first('nomemp') }}</strong>
            	</span>
        	@endif
   </div>
</div>

<div class="form-group row">
	<label for="edademp" class="col-md-2 col-form-label">Edad</label>
    <div class="col-sm-8">
		<input id="edademp" type="number" class="form-control" name="edademp" placeholder="Edad">
        	@if ($errors->has('edademp'))
            	<span class="help-block">
                	<strong>{{ $errors->first('edademp') }}</strong>
            	</span>
        	@endif
   </div>
</div>

<div class="form-group row">
	<label for="edocivil" class="col-md-2 col-form-label">Estado civil</label>
    <div class="col-sm-8">
		<input id="edocivil" type="text" class="form-control" name="edocivil" placeholder="Estado civil">
        	@if ($errors->has('edocivil'))
            	<span class="help-block">
                	<strong>{{ $errors->first('edocivil') }}</strong>
            	</span>
        	@endif
   </div>
</div>

<div class="form-group row">
	<label for="depmenor" class="col-md-2 col-form-label">Dependientes menores</label>
    <div class="col-sm-8">
		<input id="depmenor" type="number" class="form-control" name="depmenor" placeholder="Dependientes menores" >
        	@if ($errors->has('depmenor'))
            	<span class="help-block">
                	<strong>{{ $errors->first('depmenor') }}</strong>
            	</span>
        	@endif
   </div>
</div>

<div class="form-group row">
	<label for="depmayor" class="col-md-2 col-form-label">Dependientes mayores</label>
    <div class="col-sm-8">
		<input id="depmayor" type="number" class="form-control" name="depmayor" placeholder="Dependientes mayores">
        	@if ($errors->has('depmayor'))
            	<span class="help-block">
                	<strong>{{ $errors->first('depmayor') }}</strong>
            	</span>
        	@endif
   </div>
</div>

<div class="form-group row">
	<label for="discapacidades" class="col-md-2 col-form-label">Discapacidades</label>
    <div class="col-sm-8">
		<input id="discapacidades" type="text" class="form-control" name="discapacidades" placeholder="Discapacidades">
        	@if ($errors->has('discapacidades'))
            	<span class="help-block">
                	<strong>{{ $errors->first('discapacidades') }}</strong>
            	</span>
        	@endif
   </div>
</div>

<div class="form-group row">
	<label for="domemp" class="col-md-2 col-form-label">Domicilio</label>
    <div class="col-sm-8">
		<input id="domemp" type="text" class="form-control" name="domemp" placeholder="Domicilio">
        	@if ($errors->has('domemp'))
            	<span class="help-block">
                	<strong>{{ $errors->first('domemp') }}</strong>
            	</span>
        	@endif
   </div>
</div>

<div class="form-group row">
	<label for="telcasa" class="col-md-2 col-form-label">Telefono</label>
    <div class="col-sm-8">
		<input id="telcasa" type="number" class="form-control" name="telcasa" placeholder="Telefono">
        	@if ($errors->has('telcasa'))
            	<span class="help-block">
                	<strong>{{ $errors->first('telcasa') }}</strong>
            	</span>
        	@endif
   </div>
</div>

<div class="form-group row">
	<label for="celemp" class="col-md-2 col-form-label">Número Celular</label>
    <div class="col-sm-8">
		<input id="celemp" type="number" class="form-control" name="celemp" placeholder="Numero celular">
        	@if ($errors->has('celemp'))
            	<span class="help-block">
                	<strong>{{ $errors->first('celemp') }}</strong>
            	</span>
        	@endif
   </div>
</div>

<div class="form-group row">
	<label for="email" class="col-md-2 col-form-label">Correo electrónico</label>
    <div class="col-sm-8">
		<input id="email" type="email" class="form-control" name="email" placeholder="ejemplo@ejemplo.com">
        	@if ($errors->has('email'))
            	<span class="help-block">
                	<strong>{{ $errors->first('email') }}</strong>
            	</span>
        	@endif
   </div>
</div>

<div class="form-group row">
	<label for="preparacion" class="col-md-2 col-form-label">Nivel académico</label>
    <div class="col-sm-8">
		<input id="preparacion" type="text" class="form-control" name="preparacion" placeholder="Nivel académico">
        	@if ($errors->has('preparacion'))
            	<span class="help-block">
                	<strong>{{ $errors->first('preparacion') }}</strong>
            	</span>
        	@endif
   </div>
</div>

<div class="form-group row">
	<label for="sueldonto" class="col-md-2 col-form-label">Sueldo</label>
    <div class="col-sm-8">
		<input id="sueldonto" step="any" type="number" class="form-control" name="sueldonto" placeholder="Sueldo neto">
        	@if ($errors->has('sueldonto'))
            	<span class="help-block">
                	<strong>{{ $errors->first('sueldonto') }}</strong>
            	</span>
        	@endif
   </div>
</div>

<div class="form-group row">
	<label for="cargo" class="col-md-2 col-form-label">Puesto</label>
    <div class="col-sm-8">
		<input id="cargo" type="text" class="form-control" name="cargo" placeholder="Puesto">
        	@if ($errors->has('cargo'))
            	<span class="help-block">
                	<strong>{{ $errors->first('cargo') }}</strong>
            	</span>
        	@endif
   </div>
</div>

<div class="form-group row">
	<label for="jefedirecto" class="col-md-2 col-form-label">Jefe directo</label>
    <div class="col-sm-8">
		<input id="jefedirecto" type="text" class="form-control" name="jefedirecto" placeholder="Jefe directo">
        	@if ($errors->has('jefedirecto'))
            	<span class="help-block">
                	<strong>{{ $errors->first('jefedirecto') }}</strong>
            	</span>
        	@endif
   </div>
</div>

<div class="form-group row">
	<label for="subordinados" class="col-md-2 col-form-label">Empleados a cargo</label>
    <div class="col-sm-8">
		<input id="subordinados" type="text" class="form-control" name="subordinados" placeholder="Empleados a cargo">
        	@if ($errors->has('subordinados'))
            	<span class="help-block">
                	<strong>{{ $errors->first('subordinados') }}</strong>
            	</span>
        	@endif
   </div>
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>