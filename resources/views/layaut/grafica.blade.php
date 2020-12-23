<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Grafica</title>
	</head>
<body>
		<div class="card-body">
			<div class="card shadow mb-5"  >
					<div class="card-body">
							<div class="chart-area">
								<div id="chartContainer" style="width: 100%; height: 100%;display: inline-block;"> </div>
							</div>
					</div>
			</div>
		</div>
	</body>
	<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

						<script type="text/javascript">

								var chart = new CanvasJS.Chart("chartContainer",
								{
									animationEnabled: true,
									animationDuration: 1000,
									interactivityEnabled: true,

									title:{
										text: "Tickets "
									},
									data: [//array of dataSeries
										{ //dataSeries object

										 /*** Change type "column" to "bar", "area", "line" or "pie"***/
										 type: "pie",
										 dataPoints: [
										 { label: "Tikets Totales", y: <?php echo $ticket ?>  },
										 { label: "Tickets Estatus Resueltos", y: <?php echo $rticket ?> },
										 { label: "Tickets Asignados", y: <?php echo $asignado?> },
										 { label: "Tickets Cerrados por Tiempo", y: <?php echo $cerradoPT ?> }
										 ]
									 }
									 ]
								 });
								 chart.render();

								 // SEPARADOR

								 var chart = new CanvasJS.Chart("chartContainer4",
						{
							animationEnabled: true,
							animationDuration: 1000,
							interactivityEnabled: true,
								title: {
										text: "Tickets "
								},
								axisX: {
										interval: 10,
								},
								data: [
								{
									type: "column",
									legendMarkerType: "triangle",
									legendMarkerColor: "green",
									color: "rgba(255,12,32,.3)",


										dataPoints: [
											{ y: <?php echo $ticket ?> , label: "Tikets Totales"  },
											{ y: <?php echo $rticket?>, label: "Resueltos" },
											{ y: <?php echo $asignado?>, label: "Tickets Asignados"  },
											{ y: <?php echo $cerradoPT?> ,label: "Tickets Cerrados por Tiempo" }
										]
								},
								]
						});
				chart.render();

				// separador 2
				var chart = new CanvasJS.Chart("chartContainer3",
				{
				animationEnabled: true,
				animationDuration: 1000,
				interactivityEnabled: true,
				title: {
					 text: "Tickets"
				},
				axisX: {
					 interval: 10,
				},
				data: [
				{
					 type: "bar",
					 legendMarkerType: "triangle",
					 legendMarkerColor: "green",
					 color: "rgba(255,12,32,.3)",

					 dataPoints: [
						 { label: "Tikets Totales", y: <?php echo $ticket ?>  },
						 { label: "Tickets Estatus Resueltos", y: <?php echo $rticket?> },
						 { label: "Tickets Asignados", y: <?php echo $asignado?> },
						 { label: "Tickets Cerrados por Tiempo", y: <?php echo $cerradoPT?> }
					 ]
				},
				]
				});
				chart.render();

	</script>
</html>
