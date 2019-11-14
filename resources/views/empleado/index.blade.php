@extends ('layouts.admin')
@section ('contenido')


    <!--Rejilla de Bootstrap-->
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Empleados <a href="/empleado/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('empleado.search')
	</div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>DNI</th>
                    <th>Nombres</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Estado</th>
                    <th>Opciones</th>
                </thead>
                @foreach ($empleados as $emp)
                <tr>
                    <td>{{$emp->idempleado}}</td>
                    <td>{{$emp->emp_nombre}}</td>
                    <td>{{$emp->emp_appaterno}}</td>
                    <td>{{$emp->emp_apmaterno}}</td>
                    <td>{{$emp->emp_estado}}</td>
                    <td>
                        <a href="{{URL::action('EmpleadoController@edit',$emp->idempleado)}}"><button class="btn btn-info">Editar</button></a>
                        {{--DAR DE BAJA--}}
                        <button class="btn btn-danger" data-toggle="modal" data-target="#modal-delete-{{$emp->idempleado}}">Dar de baja</button>
                        <div id="modal-delete-{{$emp->idempleado}}" class="modal fade" aria-hidden="true" role="dialog" tabindex="-1" >
                            {!!Form::model($emp,['method'=>'PATCH','route'=>['empleado.update',$emp->idempleado]])!!}
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <h4 class="modal-title">Confirmación</h4>
                                    </div>
                                    {{--Hola--}}
                                    <div class="modal-body">
                                        @include('empleado.form_delete')
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-primary">Confirmar</button>
                                    </div>
                                </div>
                            </div>
                            {{Form::Close()}}

                        </div>


                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#user-id">Ver información</button>

                        <div id="user-id" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header modal-header-warning">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                        <h5 class="modal-title" id="exampleModalLabel" style="font-size: 15pt; font-weight: bold; color:mediumseagreen ; border: solid; text-align: center">DETALLES DEL EMPLEADO</h5>

                                    </div>
                                    <div class="modal-body">

                                        <div class="row">
                                            <div class="col-md-2">
                                                <p><b>Nombre(s):</b></p>
                                            </div>
                                            <div class="col-md-8">
                                                <p>{{$emp->emp_nombre}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <p><b>Apellidos:</b></p>
                                            </div>
                                            <div class="col-md-8">
                                                <p><?php
                                                    $paterno=$emp->emp_appaterno;
                                                    $materno=$emp->emp_apmaterno;
                                                    echo $paterno.' '.$materno;
                                                    ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <p><b>Sexo:</b></p>
                                            </div>
                                            <div class="col-md-8">
                                                <p><?php
                                                    $sexo=$emp->emp_sexo;
                                                    If ($sexo == "F"){
                                                        echo 'Femenino';
                                                    }ELSE{
                                                        echo 'Masculino';
                                                    }
                                                    ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <p><b>Estado Civil:</b></p>
                                            </div>
                                            <div class="col-md-8">
                                                <p>{{$emp->emp_civil}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <p><b>Fecha de Nacimiento:</b></p>
                                            </div>
                                            <div class="col-md-8">
                                                <p>{{$emp->emp_nacimiento}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <p><b>Teléfono:</b></p>
                                            </div>
                                            <div class="col-md-8">
                                                <p>{{$emp->emp_telefono}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-2">
                                                <p><b>Dirección:</b></p>
                                            </div>
                                            <div class="col-md-8">
                                                <p>{{$emp->emp_direccion}}</p>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    </div>


                                </div>
                            </div>
                        </div>


                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        {{$empleados->render()}}
    </div>
</div>
@endsection