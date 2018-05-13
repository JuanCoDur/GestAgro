 <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-3 control-label"></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" placeholder="Nombre completo" value="{{ $us->name}}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
</div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-3 control-label"></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" placeholder="ejemplo@hotmail.com" value="{{ $us->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-3 control-label"></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" placeholder="Contraseña" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-3 control-label"></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" placeholder="Contraseña" name="password_confirmation" required>
                            </div>
                        </div>-->
                        <div class="form-group">
                          <button class="btn btn-primary" type="submint">Guardar</button>
                          <button class="btn btn-danger" type="reset">Calcelar</button>
                        </div>