@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <!-- Sign Up Card row -->
    <div class="row">
      <div class="col s12 m12 l8 offset-l2">
        <div class="card">
          <div class="card-content">
            <span class="card-title red-text text-lighten-2"><h3>Resetear Contraseña</h3></span>
            <div class="divider"></div> 
            @if (session('status'))
                <center>
                <div class="chip light-green darken-3 white-text text-white" style="height:100%;">
                    {{ session('status') }}
                    <i class="close material-icons">close</i>
                </div>
                </center>    
            @endif 
             
              <!-- Form -->
               <form class="container" method="POST" action="{{ route('password.email') }}">
               {{ csrf_field() }}

                <div class = "row">
                  <div class="input-field col m6 l12{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}">
                    <label for="email">Email</label>

                    @if ($errors->has('email'))
                        <span class="chip red lighten-2 white-text text-white">
                            {{ $errors->first('email') }}
                            <i class="close material-icons">close</i>
                        </span>
                    @endif
                  </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l12">
                     <center>
                          <button class="btn waves-effect waves-light " type="submit" name="action">Cambiar o restablecer su contraseña
                          </button>
                      </center>
                    </div>
                </div>                              

              </form>
              <!-- Form -->
          </div>

        </div>
      </div>
    </div>
    <!-- End of Sign Up Card row -->
</div>
@endsection
