@extends('layouts.app')
@section('content')
    <div class="row">
       <div class="col-lg-6 col-md-8 col-md-offset-2 col-sm-12 col-xs-12 col-lg-offset-3">
          <h3>Ingrese los dados del nuevo
          <span class="label label-default">Usuario</span>
          </h3>
       </div>
    </div>

    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-3">
    {!!Form::open(['route'=>'admin.store','method'=>'POST'])!!}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 col-xs-12 control-label">Nombre</label>

            <div class="col-md-6 col-xs-12">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 col-xs-12 control-label">E-Mail</label>

            <div class="col-md-6 col-xs-12">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 col-xs-12 control-label">Password</label>

            <div class="col-md-6 col-xs-12">
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label for="password-confirm" class="col-md-4 control-label">Confirmar Password</label>

            <div class="col-md-6 col-xs-12">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
        </div>
        <div class="form-group">
                <label for="type" class="col-md-4 col-xs-12 control-label">
                     Tipo Usuario:
                </label> 
                <div class="col-md-6 col-xs-12">
                    {!!Form::select('type', ['admin' => 'admin', 'miembro' => 'miembro'], 'miembro', ['placeholder' => '','class'=>'form-control']);!!}
                </div>
        </div>
      	<div class="form-group">
                <div class="col-md-4 col-md-offset-4 col-xs-12 text-center">
                    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
                    <a href="/admin"><button type="button" class="btn btn-danger">Cancelar</button></a>
                </div>
        </div>		

 
    {!!Form::close()!!}
    </div>
    </div>
@endsection


