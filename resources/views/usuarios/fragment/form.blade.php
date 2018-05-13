
<div class="form-group row{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-2 col-form-label">Nombre</label>
    <div class="col-sm-8">
        <input id="name" type="text" class="form-control" name="name" placeholder="Nombre completo" value="{{ $us->name }}" required autofocus>
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
   </div>
</div>

<div class="form-group row{{ $errors->has('phone') ? ' has-error' : '' }}">
    <label for="phone" class="col-md-2 col-form-label">Telefono</label>
    <div class="col-sm-8">
        <input id="phone" type="text" class="form-control" name="phone" placeholder="Numero de telefono" value="{{ $us->phone }}" required autofocus>
        @if ($errors->has('phone'))
            <span class="help-block">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
        @endif
   </div>
</div>

<div class="form-group row{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email" class="col-md-2 col-form-label">Correo</label>

    <div class="col-md-8">
        <input id="email" type="email" class="form-control" name="email" placeholder="ejemplo@hotmail.com" value="{{ $us->email }}" required>

        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="password" class="col-md-2 col-form-label">Contraseña</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control" placeholder="Contraseña" name="password" required>

        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="password-confirm" class="col-md-2 col-form-label">Confirmar contraseña</label>

    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" placeholder="Contraseña" name="password_confirmation" required>
    </div>
</div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
                    
<div class="form-group">
    <button class="btn btn-primary" type="submint">Guardar</button>
    <button class="btn btn-danger" type="reset">Calcelar</button>
</div>