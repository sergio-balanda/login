@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <!-- Sign Up Card row -->
    <div class="row">
      <div class="col s12 m12 l8 offset-l2">
        <div class="card">
          <div class="card-content">
            <span class="card-title red-text text-lighten-2"><h3>Reset Password</h3></span>
            <div class="divider"></div> 
            <!-- Form -->
            <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">
                        
                        <div class="row">
                            <div class="input-field{{ $errors->has('email') ? ' has-error' : '' }}col s12 l12">
                                <label for="email" class="">E-Mail Address</label>
                                <input id="email" type="email" class="validate" name="email" value="{{ $email or old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="chip red lighten-2 white-text text-white">
                                        <strong>{{ $errors->first('email') }}</strong>
                                        <i class="close material-icons">close</i>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="input-field{{ $errors->has('password') ? ' has-error' : '' }}col s12 l12">
                                <label for="password" class="">Password</label>
                                <input id="password" type="password" class="validate" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="chip red lighten-2 white-text text-white">
                                        <strong>{{ $errors->first('password') }}</strong>
                                        <i class="close material-icons">close</i>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="input-field{{ $errors->has('password_confirmation') ? ' has-error' : '' }}col s12 l12">
                                <label for="password-confirm" class="">Confirm Password</label>
                                <input id="password-confirm" type="password" class="validate" name="password_confirmation" required>

                                @if ($errors->has('password_confirmation'))
                                    <span class="chip red lighten-2 white-text text-white">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        <i class="close material-icons">close</i>
                                    </span>
                                @endif
                            
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="input-field col s12 l12">
                                <center>
                                <button type="submit" class="btn waves-effect waves-light">
                                    Reset Password
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
