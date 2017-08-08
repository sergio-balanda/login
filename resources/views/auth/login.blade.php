@extends('layouts.app')

@section('content')
   <br>
    <div class="container">
        <!-- Sign Up Card row -->
        <div class="row">
          <div class="col s12 m12 l8 offset-l2">
            <div class="card">
              <div class="card-content">
                <span class="card-title red-text text-lighten-2"><h3>Iniciar</h3></span>
                <div class="divider"></div> 
                  <!-- Form -->
                   <form class="container" method="POST" action="{{ route('login') }}">
                   {{ csrf_field() }}
                   
                    <div class = "row">
                      <div class="input-field col s12 m12 l12{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}">
                        <label for="email">Email</label>
                        
                        @if ($errors->has('email'))
                            <span class="chip red lighten-2 white-text text-white">
                                <strong>{{ $errors->first('email') }}</strong>
                                <i class="close material-icons">close</i>
                            </span>
                        @endif
                      </div>
                    </div>
                    
                    <div class="row">
                        <div class="input-field col s12 l12{{ $errors->has('password') ? ' has-error' : '' }}">
                          <input id="password" type="password" class="validate"
                          name="password" required>
                          <label for="password">Password</label>
                          
                          @if ($errors->has('password'))
                            <span class="chip red lighten-2 white-text text-white">
                                <strong>{{ $errors->first('password') }}</strong>
                               <i class="close material-icons">close</i>
                            </span>
                          @endif
                        </div>
                    </div>
                    
                    <div class="row">
                        <p>
                          <input type="checkbox" id="test5" name="remember"
                          {{ old('remember') ? 'checked' : '' }}/>
                          <label for="test5">Recordarme</label>
                        </p>
                    </div>
                    
                    <div class="row">
                        <div class="input-field col s12 l12">
                         <center>
                              <button class="btn waves-effect waves-light " type="submit" name="action">Siguiente
                              </button>
                          </center>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="input-field col s12 l12">
                         <center>
                             <a href="{{ route('password.request') }}"
                              class="red-text text-lighten-2">Olvidaste tu contraseña?</a>
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
