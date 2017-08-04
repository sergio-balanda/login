@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-3">

            {!!Form::model($admin,['route'=>['admin.update',$admin], 'method'=>'PUT', 'class'=>''])!!}	
        
            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Name</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" value="{{ $admin->name or old('name')}}" required autofocus>

                    @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ $admin->email or old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="col-md-4 control-label">Password</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>
            
        <!--    <div class="form-group">
                 <label for="type" class="col-md-4 control-label">
                     Tipo Usuario:
                 </label> 
                <div class="col-md-6">
                    {!! Form::radio('type', 'user', true) !!} User
                    {!! Form::radio('type', 'admin') !!} Admin
                </div>
            </div> -->
            
             <div class="form-group">
                <label for="type" class="col-md-4 control-label">
                     Tipo Usuario:
                </label> 
                <div class="col-md-6">
                    {!!Form::select('type', ['admin' => 'admin', 'miembro' => 'miembro'], 'admin', ['placeholder' => '','class'=>'form-control']);!!}
                </div>
            </div>
            
             <div class="form-group">
                 <div class="col-lg-12 text-center">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <button class="btn btn-danger" type="reset">Cancelar</button> 
                 </div>         
            </div>
    {!!Form::close()!!}
        </div>
    </div>          
            
    

@endsection