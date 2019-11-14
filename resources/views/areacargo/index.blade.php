@extends ('layouts.admin')
@section ('contenido')
<!--Rejilla de Bootstrap-->
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Área 
            <button class="btn btn-success" data-toggle="modal" data-target="#create_preg" >Nuevo</button>
            <a href="areacargo/create"><button class="btn btn-success">Asignar Cargo</button></a>
        </h3>
        @include('areacargo.search')
    </div>
</div>
<div id="create_preg" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h5 class="modal-title" id="exampleModalLabel" style="font-size: 15pt; font-weight: bold; color:mediumseagreen ; border: solid; text-align: center">Ingrese nueva Area</h5>
                </div>
                <form action="{{route('area.store')}}" method="post">
                    {{csrf_field()}}
                    <div class="modal-body">
                        @include('area.form')
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>N°</th>
                    <th>Nombre Área</th>
                    <th>Cargo</th>
                    <th>Opcion</th>
                     <?php $num = 0?>
                </thead>
                @foreach ($area_cargo as $ar)
                <tr>
                   <td><?php $num=$num+1; echo $num;?></td>
                   <td>{{$ar->nombre_area}}</td>
                   <td>{{$ar->cargo}}</td>
                    <td>
                        <!-- editar y eliminar
                        <a href="{{URL::action('AreaController@edit',$ar->idareacargo)}}"><button class="btn btn-info">Editar</button></a>
                        <a href=""><button class="btn btn-danger">Eliminar</button></a>-->
                    </td>
                </tr>
                @endforeach
            </table>
            @include('area.show')
        </div>
        {{$area_cargo->render()}}
    </div>
</div>
@endsection