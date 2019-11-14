@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Área: {{$area->nombre_area}}</h3>
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

			{!!Form::model($area,['method'=>'PATCH','autocomplete'=>'off','route'=>['area.update',$area->idarea]])!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="dni">DNI</label>
            	<input type="text" name="dni" class="form-control" value="{{$empleado->dni}}" placeholder="DNI...">
            </div>
            <div class="form-group">
            	<label for="nombres">Nombre</label>
            	<input type="text" name="nombres" class="form-control"  value="{{$empleado->nombres}}" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Nombre...">
            </div>
            <div class="form-group">
            	<label for="apellido_paterno">Apellido Paterno</label>
            	<input type="text" name="apellido_paterno" class="form-control" value="{{$empleado->apellido_paterno}}" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Apellido Paterno...">
            </div>
            <div class="form-group">
            	<label for="apellido_materno">Apellido Materno</label>
            	<input type="text" name="apellido_materno" class="form-control" value="{{$empleado->apellido_materno}}" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Apellido Materno...">
            </div>
            <div class="form-group">
                <label for="estado_civil">Estado Civil</label>
                <select name="estado_civil">
                    <option selected value="0">-Seleccionar-</option>
                    <option value="SOLTERO(A)">SOLTERO(A)</option>
                    <option value="CASADO(A)">CASADO(A)</option>
                    <option value="VIUDO(A)">VIUDO(A)</option>
                    <option value="DIVORCIADO(A)">DIVORCIADO(A)</option>
                    <option value="NO ESPECIFICA">NO ESPECIFICA</option>
                </select>
            </div>
            <div class="form-group">
            	<label for="telefono">Teléfono</label>
            	<input type="text" name="telefono" class="form-control" value="{{$empleado->telefono}}" placeholder="Teléfono...">
            </div>
            <div class="form-group">
                <label for="start">Fecha de Nacimiento </label>
                <input type="date" id="start" name="nacimiento" value="{{$empleado->nacimiento}}" min="" max="2019-12-31" required>
            </div>
            <div class="form-group">
                <label for="genero">Género</label>
                <select name="genero">
                    <option selected value="0">-Seleccionar-</option>
                    <option value="F">F</option>
                    <option value="M">M</option>
                </select>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" class="form-control" value="{{$empleado->direccion}}" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Dirección...">
            </div>
            <div class="form-group">
                <label for="foto_perfil">
                    <input type="file" name="foto_perfil">
                </label>
            </div>
            <div class="form-group">
                <fieldset>
                    <label>Estado del empleado</label>
                    <!--<legend>Estado del empleado</legend>-->
                    <label>
                        <input type="radio" name="estado" value="ACTIVO" checked> ACTIVO
                    </label>
                    <label>
                        <input type="radio" name="estado" value="INACTIVO"> DE BAJA
                    </label>
                </fieldset>
            </div>
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
                
            	<a class="btn btn-danger" href="{{ URL::previous() }}" role="button">Cancelar</a>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@stop