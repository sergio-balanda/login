@extends('layouts.app')

@section('content')

<!-- @if(Auth::user()->type == 'admin')
     @include('admin.index')
@else-->
<!--@endif -->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Panel de control</div>

                <div class="panel-body">
                    ESTAS LOGEADO
                </div>
            </div>
        </div>
    </div>
    @include('contacto.contacto')


@endsection
