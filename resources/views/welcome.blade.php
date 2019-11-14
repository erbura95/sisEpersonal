@extends ('layouts.admin2')
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
    <section class="content">
      <div class="container-fluid">
        <div class="row" >
            <div class="col-lg-6 col-6" >
            <!-- small box -->
                <div class="small-box bg-red" >
                  <div class="inner">
                    <h3>150</h3>

                    <p>New Orders</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href="#" class="small-box-footer">MAS INFORMACION <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        </div><!-- /.container-fluid -->
</section> 

    </div>
</div>



@endsection
