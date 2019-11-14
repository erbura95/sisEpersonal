@extends ('layouts.admin')
@section ('contenido')

<!--Rejilla de Bootstrap-->
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Preguntas <a href="/cuestionario/pregunta/create"><button class="btn btn-success">Nuevo</button></a></h3>
        @include('cuestionario.pregunta.search')
    </div>

</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <th>#</th>
                    <th>Pregunta</th>
                    <th>Categoría</th>
                    <th>Opciones</th>
                </thead>
                <?php $num=0; ?>
                @foreach ($preguntas as $preg)
                <tr>
                    <td><?php $num=$num+1; echo $num; ?></td>
                    <td>{{$preg->pr_pregunta}}</td>
                    <td>{{$preg->cat_nombre}}</td>
                    <td>
                        <a href=""><button class="btn btn-info">Editar</button></a>
                        <a href=""><button class="btn btn-danger">Eliminar</button></a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        {{$preguntas->render()}}
    </div>
</div>
@endsection
