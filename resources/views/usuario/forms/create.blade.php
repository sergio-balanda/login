@extends('layouts.app')
@section('content')
<br>
<div class="container">
<!-- Sign Up Card row -->
    <div class="row">
        <div class="col s12 m12 l8 offset-l2">
            <div class="card">
            <a class="btn btn-floating btn-large red lighten-2 pulse right"><i class="material-icons">person_add</i></a>
            <div class="card-content">
                <span class="card-title red-text text-lighten-2">
                    <h3>Ingrese datos</h3>
                    <p>del nuevo usuario</p>
                </span>
            <div class="divider"></div> 
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-3">
                    {!!Form::open(['route'=>'admin.store','method'=>'POST'])!!}
                    
                    <div class="input-field{{ $errors->has('name') ? ' has-error' : '' }} col s12 m12 l12">
                        <label for="name" class="col s12 m12 l12">Nombre</label>
                        <input id="name" type="text" class="validate col s12 m12 l12" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="chip red lighten-2 white-text text-white">
                                <strong>{{ $errors->first('name') }}</strong>
                                <i class="close material-icons">close</i>
                            </span>
                        @endif   
                    </div>
                    
                    <div class="input-field{{ $errors->has('email') ? ' has-error' : '' }} col s12 m12 l12">
                        <label for="email" class="col s12 m12 l12">E-Mail</label>
                        <input id="email" type="email" class="validate col s12 m12 l12" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="chip red lighten-2 white-text text-white">
                                <strong>{{ $errors->first('email') }}</strong>
                                <i class="close material-icons">close</i>
                            </span>
                        @endif
                    </div>
                    
                    <div class="input-field{{ $errors->has('password') ? ' has-error' : '' }} col s12 m12 l12">
                        <label for="password" class="col s12 m12 l12">Password</label>
                        <input id="password" type="password" class="validate col s12 m12 l12" name="password" required>

                        @if ($errors->has('password'))
                            <span class="chip red lighten-2 white-text text-white">
                                <strong>{{ $errors->first('password') }}</strong>
                                <i class="close material-icons">close</i>
                            </span>
                        @endif
                    </div>
                    
                    <div class="input-field col s12 m12 l12{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label for="password-confirm" class="col s12 m12 l12">Confirmar Password</label>
                        <input id="password-confirm" type="password" class="col s12 m12 l12" name="password_confirmation" required>
                        
                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                    
                    <div class="input-field col s12 m12 l12">  
                        <div class="col s12 m12 l12">
                            {!!Form::select('type', ['admin' => 'Admin', 'miembro' => 'Miembro'], 'miembro', ['placeholder' => 'Tipo de Usuario','class'=>'disabled']);!!}
                        </div>
                    </div>
                 
                    <div class="input-field col s12 m12 l12">
                        <div class="col s12 m12 l12">
                            <center>
                            {!!Form::submit('Registrar',['class'=>'btn blue'])!!}
                            <a href="/admin"><button type="button" class="btn red accent-4">Cancelar</button></a>
                            </center>
                        </div>
                    </div>

                    {!!Form::close()!!}
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
<!-- End of Sign Up Card row -->
</div>
<div class="row">
    <div class="col s12 m12 l8 offset-l2">
        @include('alerts.request')
    </div>
</div>
<script>
 $(document).ready(function() {
    $('select').material_select();
  });
      
</script>
@endsection
