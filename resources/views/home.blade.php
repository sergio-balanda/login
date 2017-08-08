@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col l12 s12">
            <blockquote>
              <h4>Usuario logueado</h4>
              <p class="flow-text">panel de admistracion</p>
            </blockquote>
        </div>
    </div>
    @include('contacto.mensaje')
</div> 
@endsection
