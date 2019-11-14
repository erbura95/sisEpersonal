@extends ('layouts.admin2')
@section ('contenido')
	<section class="content">
      <div class="container-fluid">
        <div class="row" >
          <!-- small box -->
          @for ($i = 0; $i < 3; $i++)
            <div class="col-lg-6 col-6" >
                <div class="small-box bg-teal" >
                  <div class="inner">
                    <h3>150</h3>
                    <p>New Orders</p>
                  </div>
                  <div class="icon">
                  <!--<i class="ion ion-stats-bars"></i>-->
                  <i class="ion ion-pie-graph"></i>
                  </div>
                  <a href="#" class="small-box-footer"><b>Mas Informacion </b><i class="glyphicon glyphicon-circle-arrow-right"></i></a>
                </div>
            </div>
        @endfor
          <!-- ./col -->
        
         </div>
            </div>
</section> 
@endsection