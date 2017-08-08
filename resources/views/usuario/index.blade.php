@extends('layouts.app')
@section('content')
<br>
<div class="container">
   <div class="row">
       <div class="col m2 s12 l12">
       @include('alerts.mensaje') 
          <h3 class="red-text text-lighten-2">Crear usuario 
          <a href="admin/create"><button type="button" class="btn btn-primary red lighten-2">Nuevo</button></a>
          </h3>
       </div>
   </div>
   
   <div class="row">
        <div class="col m10 s10 l10 xl10">
            @include('usuario.forms.search')
        </div>
        <div class="col m2 s2 l2 xl2">
            <a href="/admin"><i class="material-icons refresh">refresh</i></a>
        </div>  
    </div>
       
    <div class="row">
        <div class="col l12">
            <p class="right-align">
                <i>{{ $usuarios->total() }} usuarios encontrados</i>
                <i class=""> Ordenar por:</i>   
            </p>
        </div>
    </div>   
       
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-12">
            <table class="responsive-table highlight bordered">
                <thead>
                    <th>Nombre</th>
                    <th>E-Mail</th>
                    <th>Tipo</th>
                    <th>Operaciones</th>
                </thead>
                <tbody>
                   @foreach($usuarios as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->type}}</td>

                   @if(Auth::user()->type == 'admin')
                        <td>
                           <p>
                            {!! link_to_route('admin.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn blue','style'=>'width:100%;']);!!}
                            </p>
                          
	                        {!!Form::open(['route'=>['admin.destroy',$user->id],'method'=>'DELETE'])!!}
	
	                        {!!Form::submit('Eliminar',['class'=>'btn red accent-4','style'=>'width:100%;'])!!}
	
	                   
	                        {!!Form::close()!!}
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $usuarios->render() !!}
        </div>
    </div>
</div>
@endsection


