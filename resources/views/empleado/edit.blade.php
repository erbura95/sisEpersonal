@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Empleado: {{$empleado->emp_nombre}}</h3>
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

			{!!Form::model($empleado,['method'=>'PATCH','route'=>['empleado.update',$empleado->idempleado]])!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="id">DNI</label>
            	<input type="text" name="idempleado" class="form-control" value="{{$empleado->idempleado}}" placeholder="DNI...">
            </div>
            <div class="form-group">
            	<label for="emp_nombre">Nombre</label>
            	<input type="text" name="emp_nombre" class="form-control"  value="{{$empleado->emp_nombre}}" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Nombre...">
            </div>
            <div class="form-group">
            	<label for="emp_appaterno">Apellido Paterno</label>
            	<input type="text" name="emp_appaterno" class="form-control" value="{{$empleado->emp_appaterno}}" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Apellido Paterno...">
            </div>
            <div class="form-group">
            	<label for="emp_apmaterno">Apellido Materno</label>
            	<input type="text" name="emp_apmaterno" class="form-control" value="{{$empleado->emp_apmaterno}}" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Apellido Materno...">
            </div>
            <div class="form-group">
                <label for="emp_civil">Estado Civil</label>
                <select name="emp_civil">
                    <option value="SOLTERO(A)" <?php $civil=$empleado->emp_civil; if($civil=="SOLTERO(A)") echo 'selected'; ?>>SOLTERO(A)</option>
                    <option value="CASADO(A)" <?php $civil=$empleado->emp_civil; if($civil=="CASADO(A)") echo 'selected'; ?>>CASADO(A)</option>
                    <option value="VIUDO(A)" <?php $civil=$empleado->emp_civil; if($civil=="VIUDO(A)") echo 'selected'; ?>>VIUDO(A)</option>
                    <option value="DIVORCIADO(A)" <?php $civil=$empleado->emp_civil; if($civil=="DIVORCIADO(A)") echo 'selected'; ?>>DIVORCIADO(A)</option>
                    <option value="NO ESPECIFICA" <?php $civil=$empleado->emp_civil; if($civil=="NO ESPECIFICA") echo 'selected'; ?>>NO ESPECIFICA</option>
                </select>
            </div>
            <div class="form-group">
            	<label for="emp_telefono">Teléfono</label>
            	<input type="text" name="emp_telefono" class="form-control" value="{{$empleado->emp_telefono}}" placeholder="Teléfono...">
            </div>
            <div class="form-group">
                <label for="emp_nacimiento">Fecha de Nacimiento </label>
                <input type="date" id="start" name="emp_nacimiento" value="{{$empleado->emp_nacimiento}}" min="" max="2019-12-31" required>
            </div>
            <div class="form-group">
                <label for="emp_sexo">Género</label>
                <select name="emp_sexo">
                    <option value="F" <?php $sexo=$empleado->emp_sexo; if($sexo=="F") echo 'selected'; ?>>FEMENINO</option>
                    <option value="M" <?php $sexo=$empleado->emp_sexo; if($sexo=="M") echo 'selected'; ?>>MASCULINO</option>
                </select>


            </div>
            <div class="form-group">
                <label for="emp_direccion">Dirección</label>
                <input type="text" name="emp_direccion" class="form-control" value="{{$empleado->emp_direccion}}" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Dirección...">
            </div>
            <div class="form-group">
                <label for="emp_foto">
                    <input type="file" name="emp_foto">
                </label>
            </div>
            <div class="form-group" hidden>
                <input type="text" name="emp_estado" value="Activo">
            </div>
            <!--<div class="form-group">
                <fieldset>
                    <label>Estado del empleado</label>
                    <label>
                        <input type="radio" name="estado" value="ACTIVO" checked> ACTIVO
                    </label>
                    <label>
                        <input type="radio" name="estado" value="INACTIVO"> DE BAJA
                    </label>
                </fieldset>
            </div>-->
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
                <a class="btn btn-danger" href="{{ URL::previous() }}" role="button">Cancelar</a>
            </div>

			{!!Form::close()!!}		
            
		</div>
	</div>
@stop