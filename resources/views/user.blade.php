@extends('layaut.main')
@section('contenido')
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Usuario</h1>
      <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
              class="fas fa-download fa-sm text-white-50"></i> Generar Reporte</a>
  </div>

  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                          Usuarios </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-700">{{$users}}</div>
                  </div>
                  <!--imagen del div-->
                  <div class="col-auto">

                  </div>
                  <!--imagen del div-->
              </div>
          </div>
      </div>
  </div>



  <!-- <div class="">
    <script type="text/javascript">
      window.onload = function () {
        var chart = new CanvasJS.Chart("chartContainer", {

          title:{
            text: "Tickets Asignados"
          },
          data: [//array of dataSeries
            { //dataSeries object

             /*** Change type "column" to "bar", "area", "line" or "pie"***/
             type: "column",
             dataPoints: [
             { label: "usuarios", y: <?php echo $users ?> },
             { label: "Vania Osiris", y: <?php echo $vgonzales?> },
             { label: "Ximena Za", y: <?php echo $xzavalet?> }
             ]
           }
           ]
         });

        chart.render();
      }
      </script>
      <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
      <div id="chartContainer" style="height: 300px; width: 100%;">
      </div>

  </div> -->
  <div class="">
    <table>


    </table>
    <!-- <p>{{$usuariosp}}</p> -->
    <p>Usuarios</p>
  </div>



  @endsection
