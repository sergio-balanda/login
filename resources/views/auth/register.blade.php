@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <!-- Sign Up Card row -->
    <div class="row">
      <div class="col s12 m12 l8 offset-l2">
        <div class="card">
          <div class="card-content">
            <span class="card-title red-text text-lighten-2"><h3>Registrar</h3></span>
            <div class="divider"></div> 
              <!-- Form -->
               <form class="container" method="POST" action="{{ route('register') }}">
               {{ csrf_field() }}

                <div class = "row">
                  <div class="input-field col m6 l12{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input id="name" type="text" class="validate" name="name" value="{{ old('name') }}">
                    <label for="name">Nombre</label>

                    @if ($errors->has('name'))
                        <span class="chip red lighten-2 white-text text-white">
                            <strong>{{ $errors->first('name') }}</strong>
                            <i class="close material-icons">close</i>
                        </span>
                    @endif
                  </div>
                </div>
                
                <div class = "row">
                    <div class="input-field col m6 l12{{ $errors->has('email') ? ' has-error' : '' }}">
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
                    <div class="input-field col s12 l12">
                      <input id="password-confirm" type="password" class="validate" name="password-confirm" required>
                      <label for="password-confirm">Confimar Password</label>

                      @if ($errors->has('password'))
                        <span class="chip red lighten-2 white-text text-white">
                            <strong>{{ $errors->first('password') }}</strong>
                            <i class="close material-icons">close</i>
                        </span>
                      @endif
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12 l12">
                     <center>
                          <button class="btn waves-effect waves-light" type="submit" name="action">Registrar
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
