@extends ('layouts.admin')
@section('contenido')
<div  class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <center>
            <h3>Sistema Web creado para el curso de Gestion de Conocimiento de la Universidad Nacional del santa</h3>
            <img src="../imagenes/logo_uns.png" alt="UNS Logo" style="float:center;width:500px;height:250px;">
        </center>
    </div>
</div>

@section('footer')
<script>
    var link= document.getElementById('nav-Inicio');
    link.setAttribute('class','nav-link active');
</script>
@endsection
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h4>Burgos Ramirez Erwin</h4>
        <h4>Castañeda Chavez Diego</h4>
        <h4>Cervera Quiroz Noemi</h4>
        <h4>Cubeños Flores Edú</h4>
    

    </div>
</div>



@endsection
