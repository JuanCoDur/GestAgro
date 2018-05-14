@extends('layouts.empleadolay')

@section('content')

	<!--{{--<div >--}}
		{{--<h5>--}}
			{{--{{ $emplea->nomemp }}--}}
			{{--<a href="{{ route('empleado.edit', $emplea->id) }}"class="btn btn-default pull-right">Editar</a>--}}
		{{--</h5>--}}
	{{--</div>--}}
	{{--<p>--}}
		{{--{{ $emplea->celemp }}--}}
		{{--{{ $emplea->domemp }}--}}
		{{--{{ $emplea->edocivil }}--}}
	{{--</p>--}}
	{{--<div>--}}
		{{--@include('empleado.fragment.aside')--}}
	{{--</div>--}}-->

	<div class="row">
		<div class="col-sm-12">
			<!--{{--<h2>--}}
			{{--{{ $class->nomClasif }}--}}
			{{--<a href="{{ route('clasifi.edit', $class->id) }}"class="btn btn-default pull-right">Editar</a>--}}
			{{--</h2>--}}-->
			<a href="{{ route('empleado.index') }}" class="btn btn-info" role="button">Regresar</a>

			<a href="{{ route('empleado.edit', $emplea->id) }}" class="btn btn-info">Editar</a>
			
				<div class="form-group row">
					<label for="nomemp" class="col-md-2 col-form-label">Nombre</label>
    				<div class="col-sm-8">
						<input id="nomemp" type="text" class="form-control" name="nomemp" placeholder="Nombre completo" value="{{ $emplea->nomemp }}" required autofocus>
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
                		<input id="edademp" type="number" class="form-control" name="edademp" placeholder="Edad" value="{{ $emplea->edademp }}" required autofocus>
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
                		<input id="edocivil" type="text" class="form-control" name="edocivil" placeholder="Estado civil" value="{{ $emplea->edocivil }}" required autofocus>
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
                		<input id="depmenor" type="number" class="form-control" name="depmenor" placeholder="Dependientes menores" value="{{ $emplea->depmenor }}" required autofocus>
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
                		<input id="depmayor" type="number" class="form-control" name="depmayor" placeholder="Dependientes mayores" value="{{ $emplea->depmayor }}" required autofocus>
                        	@if ($errors->has('depmayor'))
                            	<span class="help-block">
                                	<strong>{{ $errors->first('depmayor') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>

                <div class="form-group row">
                	<label for="discapacidades" class="col-md-2 col-form-label">discapacidades</label>
                    <div class="col-sm-8">
                		<input id="discapacidades" type="text" class="form-control" name="discapacidades" placeholder="Discapacidades" value="{{ $emplea->discapacidades }}" required autofocus>
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
                		<input id="domemp" type="text" class="form-control" name="domemp" placeholder="Domicilio" value="{{ $emplea->domemp }}" required autofocus>
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
                		<input id="telcasa" type="number" class="form-control" name="telcasa" placeholder="Telefono" value="{{ $emplea->telcasa }}" required autofocus>
                        	@if ($errors->has('telcasa'))
                            	<span class="help-block">
                                	<strong>{{ $errors->first('telcasa') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>

                <div class="form-group row">
                	<label for="celemp" class="col-md-2 col-form-label">Nombre</label>
                    <div class="col-sm-8">
                		<input id="celemp" type="number" class="form-control" name="celemp" placeholder="Numero celular" value="{{ $emplea->celemp }}" required autofocus>
                        	@if ($errors->has('celemp'))
                            	<span class="help-block">
                                	<strong>{{ $errors->first('celemp') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>

                <div class="form-group row">
                	<label for="email" class="col-md-2 col-form-label">Correo electronico</label>
                    <div class="col-sm-8">
                		<input id="email" type="email" class="form-control" name="email" placeholder="ejemplo@ejemplo.com" value="{{ $emplea->email }}" required autofocus>
                        	@if ($errors->has('email'))
                            	<span class="help-block">
                                	<strong>{{ $errors->first('email') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>

                <div class="form-group row">
                	<label for="preparacion" class="col-md-2 col-form-label">Nivel academico</label>
                    <div class="col-sm-8">
                		<input id="preparacion" type="text" class="form-control" name="preparacion" placeholder="Nivel academico" value="{{ $emplea->preparacion }}" required autofocus>
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
                		<input id="sueldonto" step="any" type="number" class="form-control" name="sueldonto" placeholder="Sueldo neto" value="{{ $emplea->sueldonto }}" required autofocus>
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
                		<input id="cargo" type="text" class="form-control" name="cargo" placeholder="Puesto" value="{{ $emplea->cargo }}" required autofocus>
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
                		<input id="jefedirecto" type="text" class="form-control" name="jefedirecto" placeholder="Jefe directo" value="{{ $emplea->jefedirecto }}" required autofocus>
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
						<input id="subordinados" type="text" class="form-control" name="subordinados" placeholder="Empleados a cargo" value="{{ $emplea->subordinados }}" required autofocus>
        	                @if ($errors->has('subordinados'))
                            	<span class="help-block">
                                	<strong>{{ $errors->first('subordinados') }}</strong>
                            	</span>
        	                @endif
                   </div>
                </div>
			</div>
		</div>
	

@endsection