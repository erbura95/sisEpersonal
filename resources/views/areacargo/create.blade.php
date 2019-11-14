@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nueva Área</h3>
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
        </div>
    </div>
			{!!Form::open(array('url'=>'areacargo','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
            	<label for="idarea">Nombre de Área</label>
            	<select name="idarea" class="form-control" id="idarea" data-live-search="true">
                <option selected="true" required disabled="disabled">-Seleccionar-</option>
                @foreach ($area as $ar)
                <option value="{{$ar->idarea}}">{{$ar->nombre_area}}</option>
                @endforeach
                </select>
                
            </div>
        </div>  
    </div>    

    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-body">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    <div class="from-group">
                        <label>Cargo</label>
                        <select name="idcargo" class="form-control selectpicker" id="idcargo" data-live-search="true">
                            <option selected="true" required disabled="disabled">-Seleccionar-</option>
                           @foreach ($cargo as $car)
                           <option value="{{$car->idcargo}}">{{$car->nombre_puesto}}</option>
                           @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                    <div class="form-group">
                        <button type="button" id="bt_add" class="btn btn-primary">Agregar</button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    
                    <table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
                        <thead style="background-color: #A9D0F5">
                            <th> Opciones</th>
                            <th> Cargos</th>
                            <th> Area</th>
                        </thead>
                        <tfoot>
                            
                        </tfoot>
                        <tbody>
                            
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="guardar">     
            <div class="form-group">
                
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>	
        </div>		
	</div>
            {!!Form::close()!!}
    @push('scripts')
        <script>
            $("#guardar").hide();
            $(document).ready(function(){
                $('#bt_add').click(function(){
                    agregar(); 
                });
            });

            var cont=0;
            

            
            function agregar(){
                idcargo=$("#idcargo").val();
                cargo=$("#idcargo option:selected").text();

                idarea=$("#idarea").val();
                area=$("#idarea option:selected").text();

                
                idarea=$("#idarea").val();
                area=$("#idarea option:selected").text();

                if (cargo!="-Seleccionar-" && cargo!="") {

                    var fila='<tr class="selected" id="fila'+cont+'"><td> <button class="btn btn-danger" onclick="eliminar('+cont+');" type="button">X</button></td><td> <input type="hidden" name="idcargo[]" value="'+idcargo+'"> '+cargo+' </td><td> <input type="hidden" name="idarea[]" value="'+idarea+'"> '+area+' </td></tr>';
                    cont++;
                    
                    
                    evaluar();
                    $('#detalles').append(fila);    
                }else{
                    alert("Selecione un cargo");
                }
                                
            }
            function limpiar(){
                
            }
            function evaluar(){
                if (cont>0) {
                    $("#guardar").show();
                }else{
                    $("#guardar").hide();
                }
            }
            function eliminar(index){
                cont=cont-1
                $("#fila"+index).remove();
                evaluar();
            }
        </script>
    @endpush
@endsection