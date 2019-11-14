@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Empleado</h3>
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

			{!!Form::open(array('url'=>'empleado','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="id">DNI</label>
            	<input type="number" name="idempleado" class="form-control" placeholder="DNI...">
            </div>
            <div class="form-group">
            	<label for="emp_nombre">Nombre</label>
            	<input type="text" name="emp_nombre" class="form-control" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Nombre...">
            </div>
            <div class="form-group">
            	<label for="emp_appaterno">Apellido Paterno</label>
            	<input type="text" name="emp_appaterno" class="form-control" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Apellido Paterno...">
            </div>
            <div class="form-group">
            	<label for="emp_apmaterno">Apellido Materno</label>
            	<input type="text" name="emp_apmaterno" class="form-control" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Apellido Materno...">
            </div>
            <div class="form-group">
                <label for="emp_civil">Estado Civil</label>
                <select name="emp_civil">
                    <option selected="true" disabled="disabled">-Seleccionar-</option>
                    <option value="SOLTERO(A)">SOLTERO(A)</option>
                    <option value="CASADO(A)">CASADO(A)</option>
                    <option value="VIUDO(A)">VIUDO(A)</option>
                    <option value="DIVORCIADO(A)">DIVORCIADO(A)</option>
                    <option value="NO ESPECIFICA">NO ESPECIFICA</option>
                </select>
            </div>
            <div class="form-group">
            	<label for="emp_telefono">Teléfono</label>
            	<input type="number" name="emp_telefono" class="form-control" placeholder="Teléfono...">
            </div>
            <div class="form-group">
                <label for="emp_nacimiento">Fecha de Nacimiento </label>
                <input type="date" id="start" name="emp_nacimiento" value="" min="" max="2019-12-31" required>
            </div>
            <div class="form-group">
                <label for="emp_sexo">Género</label>
                <select name="emp_sexo">
                    <option selected="true" disabled="disabled">-Seleccionar-</option>
                    <option value="F">FEMENINO</option>
                    <option value="M">MASCULINO</option>
                </select>
            </div>
            <div class="form-group">
                <label for="emp_direccion">Dirección</label>
                <input type="text" name="emp_direccion" class="form-control" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Dirección...">
            </div>
            <div class="form-group">
                <label for="emp_foto">
                    <input type="file" name="emp_foto">
                </label>
            </div>
            <div class="form-group" hidden>
                    <input type="text" name="emp_estado" value="Activo">
            </div>
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button onclick="history.back()" class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@stop