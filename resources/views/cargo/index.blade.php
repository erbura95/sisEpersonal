@extends ('layouts.admin')
@section ('contenido')
<!--Rejilla de Bootstrap-->
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Cargos <a href="cargo/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('cargo.search')
	</div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>N°</th>
                    <th>Cargo</th>
                    <th>Sueldo</th>
                    <th>Opciones</th>
                    <?php $num = 0?>
                @foreach ($cargo as $car  )
                <tr>
                   <td><?php $num=$num+1; echo $num;?></td>
                   <td>{{$car->nombre_puesto}}</td>
                   <td>{{$car->sueldo}}</td>
                    <td><!-- editar y eliminar
                        <a href="{{URL::action('CargoController@edit',$car->idcargo)}}"><button class="btn btn-info">Editar</button></a>
                        <a href=""><button class="btn btn-danger">Eliminar</button></a>-->
                    </td>
                </tr>
                @endforeach
            </table>
            
        </div>
        {{$cargo->render()}}
    </div>
</div>
@endsection