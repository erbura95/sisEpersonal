@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Cargo: {{$cargo->nombre_puesto}}</h3>
			@if (count($errors)>0)
			<!--Si no se cumple el request-->
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($cargo,['method'=>'PATCH','autocomplete'=>'off','route'=>['cargo.update',$cargo->idcargo]])!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="nombre_puesto">Nombre del Cargo</label>
            	<input type="text" name="nombre_puesto" class="form-control" value="{{$cargo->nombre_puesto}}" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Cargo...">
            </div>
            <div class="form-group">
            	<label for="sueldo">Sueldo</label>
            	<input type="text" name="sueldo" class="form-control"  value="{{$cargo->sueldo}}"  placeholder="Sueldo...">
            </div>
            
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>

            	<a class="btn btn-danger" href="{{ URL::previous() }}" role="button">Cancelar</a>
            </div>
			{!!Form::close()!!}		
            
		</div>
	</div>
@stop