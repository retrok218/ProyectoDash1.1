@extends('layaut.main')
@section('contenido')




<!-- Meta para refrescar la pagina cada xs -->
<!-- <meta http-equiv="refresh" content="10" /> -->

  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> Control Admin</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
    class="fas fa-download fa-sm text-white-50"></i> Generar Reporte</a>

  </div>





<!-- Barra de progreso -->
<!-- en construccion -->
<!-- fin barra de progreso -->

<!-- div contenedor de graficas  -->

          <div id="div_refresh"></div>

<!-- Fin del contenedor Graficas -->

<!-- separador -->
  <hr class="sidebar-divider">
  <!-- separador -->
<!--Indicadores  -->
  <div class="row">
      <!-- Ticket totales -->
      <div class="col-xl-3 col-md-6 mb-4-" >
          <div class="card border-left-success shadow h-90 py-2">
              <div class="card-body" >
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              Tickets Totales </div>
                          <div class="h5 mb-0 font-weight-bold text-gray-700" > <i class="fas fa-circle text-success ">{{$ticket}}</i> </div>
                      </div>
                      <!--imagen del div-->
                      <div class="col-auto">
                      </div>
                      <!--imagen del div-->
                  </div>
              </div>
          </div>
      </div>


      <!-- fin Ticket totales -->

      <!-- Ticket estatus Asignados -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              Tickets Asignados </div>
                          <div class="h5 mb-0 font-weight-bold text-gray-700"> <i class="fas fa-circle text-primary"> {{$asignado}} </i> </div>
                      </div>
                      <!--imagen del div-->
                      <div class="col-auto">
                      </div>
                      <!--imagen del div-->
                  </div>
              </div>
          </div>
      </div>
      <!-- fin Ticket estatus Asignados -->


      <!-- Ticket estatus Atendidos -->
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              Tickets Estatus Atendidos </div>
                          <div class="h5 mb-0 font-weight-bold text-gray-700">{{$atendido}}</div>
                      </div>
                      <!--imagen del div-->
                      <div class="col-auto">
                      </div>
                      <!--imagen del div-->
                  </div>
              </div>
          </div>
      </div>
      <!-- fin Ticket estatus Atendidos -->


      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-warning shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                              Espera de Informacion </div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">{{$espinformacion}}</div>
                      </div>
                      <div class="col-auto">
                          <!--  imagen de mensaje i class="fas fa-comments fa-2x text-gray-300"></i>  -->
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->

      <!-- Pending Requests Card Example -->

      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-info shadow h-100 py-2">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Tickets Resueltos </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"> <i class="fas fa-circle text-success"> {{$rticket}} </i> </div>
                    </div>
                    <div class="col-auto">
                        <!--  imagen de mensaje i class="fas fa-comments fa-2x text-gray-300"></i>  -->
                    </div>
                </div>
              </div>
          </div>
      </div>


<!--inicio de los marcadores -->

      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              new </div>
                          <div class="h5 mb-0 font-weight-bold text-gray-700">{{$new}}</div>
                      </div>
                      <!--imagen del div-->
                      <div class="col-auto">
                      </div>
                      <!--imagen del div-->
                  </div>
              </div>
          </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              open </div>
                          <div class="h5 mb-0 font-weight-bold text-gray-700">{{$open}}</div>
                      </div>
                      <!--imagen del div-->
                      <div class="col-auto">

                      </div>
                      <!--imagen del div-->
                  </div>
              </div>
          </div>
      </div>
    <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              Cerrado Por Tiempo </div>
                          <div class="h5 mb-0 font-weight-bold text-gray-700">{{$cerradoPT}}</div>
                      </div>
                      <!--imagen del div-->
                      <div class="col-auto">
                      </div>
                      <!--imagen del div-->
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              notificadoalU </div>
                          <div class="h5 mb-0 font-weight-bold text-gray-700">{{$notificadoalU}}</div>
                      </div>
                      <!--imagen del div-->
                      <div class="col-auto">
                      </div>
                      <!--imagen del div-->
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              Cerrado Por Tiempo 2 </div>
                          <div class="h5 mb-0 font-weight-bold text-gray-700">{{$CerradoPT2}}</div>
                      </div>
                      <!--imagen del div-->
                      <div class="col-auto">
                      </div>
                      <!--imagen del div-->
                  </div>
              </div>
          </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              Documento Firmado </div>
                          <div class="h5 mb-0 font-weight-bold text-gray-700">{{$Documentofirmado}}</div>
                      </div>
                      <!--imagen del div-->
                      <div class="col-auto">
                      </div>
                      <!--imagen del div-->
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              En Tramite </div>
                          <div class="h5 mb-0 font-weight-bold text-gray-700">{{$Entramite}}</div>
                      </div>
                      <!--imagen del div-->
                      <div class="col-auto">
                      </div>
                      <!--imagen del div-->
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              FaltaDocumentar </div>
                          <div class="h5 mb-0 font-weight-bold text-gray-700">{{$FaltaDocumentar}}</div>
                      </div>
                      <!--imagen del div-->
                      <div class="col-auto">
                      </div>
                      <!--imagen del div-->
                  </div>
              </div>
          </div>
      </div>
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              Falta Acta Responsiva </div>
                          <div class="h5 mb-0 font-weight-bold text-gray-700">{{$FalteActaRES}}</div>
                      </div>
                      <!--imagen del div-->

                      <!--imagen del div-->
                  </div>
              </div>
          </div>
      </div>


      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              Solicitudes de  Toner  </div>
                          <div class="h5 mb-0 font-weight-bold text-gray-700">{{$solicitudroner}}</div>
                      </div>
                      <!--imagen del div-->

                      <!--imagen del div-->
                  </div>
              </div>
          </div>
      </div>


      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              Solicitudes de Impresora sin Tinta  </div>
                          <div class="h5 mb-0 font-weight-bold text-gray-700">{{$impresorasintt}}</div>
                      </div>
                      <!--imagen del div-->

                      <!--imagen del div-->
                  </div>
              </div>
          </div>
      </div>
<!-- Indicadorers -->


  </div>

  <!-- Content Row -->
  <div class="row">
      <!-- Content Column -->
      <div class="col-lg-6 mb-4">
          <!-- Project Card Example -->
          <!-- Color System -->
          <div class="row">
              <div class="col-lg-6 mb-4">
                  <div class="card bg-primary text-white shadow">
                      <div class="card-body">
                          Primary
                          <div class="text-white-50 small">#4e73df</div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 mb-4">
                  <div class="card bg-success text-white shadow">
                      <div class="card-body">
                          Success
                          <div class="text-white-50 small">#1cc88a</div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 mb-4">
                  <div class="card bg-info text-white shadow">
                      <div class="card-body">
                          Info
                          <div class="text-white-50 small">#36b9cc</div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 mb-4">
                  <div class="card bg-warning text-white shadow">
                      <div class="card-body">
                          Warning
                          <div class="text-white-50 small">#f6c23e</div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 mb-4">
                  <div class="card bg-danger text-white shadow">
                      <div class="card-body">
                          Danger
                          <div class="text-white-50 small">#e74a3b</div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 mb-4">
                  <div class="card bg-secondary text-white shadow">
                      <div class="card-body">
                          Secondary
                          <div class="text-white-50 small">#858796</div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 mb-4">
                  <div class="card bg-light text-black shadow">
                      <div class="card-body">
                          Light
                          <div class="text-black-50 small">#f8f9fc</div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 mb-4">
                  <div class="card bg-dark text-white shadow">
                      <div class="card-body">
                          Dark
                          <div class="text-white-50 small">#5a5c69</div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>



@endsection
