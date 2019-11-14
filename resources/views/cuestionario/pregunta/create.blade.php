@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h3>Nueva Pregunta</h3>
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

            {!!Form::open(array('url'=>'cuestionario/pregunta','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            <div class="form-group">
                <label for="preg">Pregunta</label>
                <input type="text" name="pr_pregunta" class="form-control" placeholder="Nueva Pregunta...">
            </div>
            <div class="form-group">
                <label for="cat_nombre">Categoría</label>
                <div class="row">
                    <div class="col-md-8">
                        <select data-live-search="true" name="cat_id" class="selectpicker show-menu-arrow test" data-size="5">
                            <option selected="true" disabled="disabled">-Seleccionar-</option>
                                @foreach($categoria as $cat)
                                <option value="{{$cat->idcategoria}}">{{$cat->cat_nombre}}</option>
                                @endforeach
                        </select>
                    </div>
                </div>
            </div>

            {{--<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">--}}
                {{--<h4>Nueva Categoria <button class="btn btn-success" data-toggle="modal" data-target="#create_cat">Añadir Categoria</button></h4>--}}
            {{--</div>--}}
            {{--<!-- Modal -->--}}
            {{--<div id="create_cat" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
                {{--<div class="modal-dialog" role="document">--}}
                    {{--<div class="modal-content">--}}
                        {{--<div class="modal-header">--}}
                            {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>--}}
                            {{--<h5 class="modal-title" id="exampleModalLabel" style="font-size: 15pt; font-weight: bold; color:mediumseagreen ; border: solid; text-align: center">Ingrese nueva pregunta</h5>--}}
                        {{--</div>--}}
                        {{--<form action="{{route('pregunta.store')}}" method="post">--}}
                            {{--{{csrf_field()}}--}}
                            {{--<div class="modal-body">--}}
                                {{--@include('cuestionario.pregunta.form')--}}
                            {{--</div>--}}
                            {{--<div class="modal-footer">--}}
                                {{--<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>--}}
                                {{--<button type="submit" class="btn btn-primary">Guardar</button>--}}
                            {{--</div>--}}
                        {{--</form>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}


            <div class="form-group">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button onclick="history.back()" class="btn btn-danger" type="reset">Cancelar</button>
            </div>

            {!!Form::close()!!}
        </div>
    </div>
@stop