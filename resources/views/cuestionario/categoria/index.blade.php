@extends ('layouts.admin')
@section ('contenido')


	<div class="">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title">Listado de Categorías</h3>
			</div>
			@if ($message = Session::get('success'))
				<div class="custom-alerts alert alert-success fade in">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
					{!! $message !!}
				</div>
                <?php Session::forget('success');?>
			@endif
			<div class="box-body">
				<table class="table table-responsive">
					<thead>
						<tr>
                            <th>#</th>
							<th>Nombre</th>
							<th>Tipo</th>
							<th>Opciones</th>
						</tr>
						
					</thead>

					<tbody>
                    <?php $num=0; ?>
						@foreach($categoria as $cat)
							<tr>
                                <td><?php $num=$num+1; echo $num; ?></td>
								<td>{{$cat->cat_nombre}}</td>
								<td>{{$cat->cat_tipo}}</td>
								<td>
									<button class="btn btn-info" data-mytitle="{{$cat->cat_nombre}}" data-mydescription="{{$cat->cat_tipo}}"
                                            data-catid={{$cat->idcategoria}} data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i> Editar</button>

									{{--<a href="javascript:;" data-toggle="modal" onclick="deleteData({{$cat->idcategoria}})"--}}
									   {{--data-target="#DeleteModal" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>--}}
									<button class="btn btn-danger" data-catid={{$cat->idcategoria}} data-toggle="modal" data-target="#custom-width-modal"><i class="fa fa-trash"></i> Eliminar</button>
								</td>
							</tr>

						@endforeach
					</tbody>


				</table>
					{{$categoria->render()}}
			</div>
		</div>
	</div>



	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
 	Nuevo
</button>

<!-- Modal CREATE-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Nueva Categoría</h4>
      </div>
      <form action="{{route('categoria.store')}}" method="post">
      		{{csrf_field()}}
	      <div class="modal-body">
				@include('cuestionario.categoria.form')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
	        <button type="submit" class="btn btn-primary">Guardar</button>
	      </div>
      </form>
    </div>
  </div>
</div>

@endsection