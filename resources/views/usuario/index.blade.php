@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Usuarios 
            <a href="usuario/create"><button class="btn btn-success">Nuevo</button></a>
        </h3>
        @include('usuario.search')
    </div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>DNI</th>
                    <th>Nombre</th>
                    <th>Usuario</th>
                    <th>Email</th>
                    <th>Tipo</th>
                </thead>
                @foreach ($usuario as $us)
                <tr>
                   <td>{{$us->emp_id}}</td>
                   <td>{{$us->emp_nombre.' '.$us->emp_appaterno.' '.$us->emp_apmaterno}}</td>
                   <td>{{$us->name}}</td>
                   <td>{{$us->email}}</td>
                   <td>{{$us->tipo}}</td>
                    <!-- editar y eliminar <td>
                        
                        <a href="{{URL::action('UsuarioController@edit',$us->id)}}"><button class="btn btn-info">Editar</button></a>
                        <a href=""><button class="btn btn-danger">Eliminar</button></a>
                    </td>-->
                </tr>
                @endforeach
            </table>
		</div>
		{{$usuario->render()}}
	</div>
</div>
@endsection