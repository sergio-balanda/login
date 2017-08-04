@extends('layouts.app')
@section('content')

<div class="container">
   <div class="row">
       <div class="col-md-8 col-md-offset-2 col-sm-12">
          <h3>Crear usuario 
          <a href="admin/create"><button type="button" class="btn btn-primary">Nuevo</button></a>
          </h3>
       </div>
   </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-12">
            <table class="table table-hover">
                <thead>
                    <th>Nombre</th>
                    <th>E-Mail</th>
                    <th>Tipo</th>
                    <th>Ordenar</th>
                    <th>Operaciones</th>
                </thead>
                <tbody>
                   @foreach($admins as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->type}}</td>
                        <td></td>
                        @if(Auth::user()->type == 'admin')
                        <td>
                            {!! link_to_route('admin.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary']);!!}
    
                            {!!Form::open(['route'=>['admin.destroy',$user],'method'=>'DELETE'])!!}
	
	                        {!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
	
	                        {!!Form::close()!!}
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection