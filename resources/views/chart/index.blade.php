<!DOCTYPE html>
<html>
<head>
<?php 
$nPedido = 0;
$nVentas = 0;
 ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>La palmera</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Lacteos</span>La palmera</a>

					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
  </nav>
  <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
      <div class="profile-sidebar">
          <div class="profile-userpic">
              <img src="https://image.freepik.com/free-icon/user-image-with-black-background_318-34564.jpg" class="img-responsive" alt="">
          </div>
          <div class="profile-usertitle">
              <div class="profile-usertitle-name">{{Auth::user()->name}}</div>
              <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
          </div>
          <div class="clear"></div>
      </div>
      <div class="divider"></div>

		<ul class="nav menu">

                   <li ><a href="{{route('products.index')}}"><em class="fa fa-dropbox">&nbsp;</em> Productos</a></li>
                     <li class="active"><a href="{{route('chart.index')}}"><em class="fa fa-users">&nbsp;</em> Estadisticas</a></li>
                            <li ><a href="{{route('venta.index')}}"><em class="fa fa-smile-o ">&nbsp;</em> Ventas</a></li>
                            <li><a href="{{route('pedidoAdmin.index')}}"><em class="fa fa-handshake-o">&nbsp;</em> Pedidos</a></li>
                            <li ><a href="{{route('proveedor.index')}}"><em class="fa fa-users">&nbsp;</em> Proveedores</a></li>
                            <li><a href="/admin/users"><em class="fa fa-users">&nbsp;</em> Clientes</a></li>

                            <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <em class="fa fa-power-off">&nbsp;</em>
                                            SALIR
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                        </li>>
				</ul>
			</li>

		</ul>
	</div><!--/.sidebar-->

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">

		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Estadisticas</h1>
			</div>
		</div><!--/.row-->

		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
          <div class="panel panel-teal panel-widget border-right">
<div class="row no-padding"><em class="fa fa-xl fa-users color-blue"></em>
<div class="large"><?php
$mysqli = new mysqli("localhost", "root", "", "pro1");

/* verificar la conexión */
if (mysqli_connect_errno()) {
printf("Conexión fallida: %s\n", mysqli_connect_error());
exit();
}

if ($result = $mysqli->query("SELECT id FROM proveedors ")) {

/* determinar el número de filas del resultado */
$row_cnt = $result->num_rows;

echo $row_cnt;

/* cerrar el resultset */
$result->close();
}?></div>
<h2><h4><div class="text-muted">Proveedores</div></h4></h2>
</div>
</div>
</div>
<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
<div class="panel panel-blue panel-widget border-right">
<div class="row no-padding"><em class="fa fa-xl fa-user-circle  color-orange"></em>
<div class="large"><?php
$mysqli = new mysqli("localhost", "root", "", "pro1");

/* verificar la conexión */
if (mysqli_connect_errno()) {
printf("Conexión fallida: %s\n", mysqli_connect_error());
exit();
}

if ($result = $mysqli->query("SELECT id FROM users ")) {

/* determinar el número de filas del resultado */
$row_cnt = $result->num_rows;

echo $row_cnt-1;

/* cerrar el resultset */
$result->close();
}?></div>
<h2><h4><div class="text-muted">Clientes</div></h2></h4>
</div>
</div>
</div>
<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
<div class="panel panel-orange panel-widget border-right">
<div class="row no-padding"><em class="fa fa-xl fa-money color-teal"></em>
<div class="large"><?php
$mysqli = new mysqli("localhost", "root", "", "pro1");

/* verificar la conexión */
if (mysqli_connect_errno()) {
printf("Conexión fallida: %s\n", mysqli_connect_error());
exit();
}

if ($result = $mysqli->query("SELECT id FROM ventas ")) {

/* determinar el número de filas del resultado */
$row_cnt = $result->num_rows;
$nVentas = $row_cnt;
echo $row_cnt;

/* cerrar el resultset */
$result->close();
}?></p></div>



<h2><h4><div class="text-muted">Ventas</div></h2></h4>
</div>
</div>
</div>
<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
<div class="panel panel-red panel-widget ">
<div class="row no-padding"><em class="fa fa-xl fa-handshake-o color-red"></em>
<div class="large"><?php
$mysqli = new mysqli("localhost", "root", "", "pro1");

/* verificar la conexión */
if (mysqli_connect_errno()) {
printf("Conexión fallida: %s\n", mysqli_connect_error());
exit();
}

if ($result = $mysqli->query("SELECT id FROM pedidos ")) {

/* determinar el número de filas del resultado */
$row_cnt = $result->num_rows;
$nPedido = $row_cnt;

echo $row_cnt;

/* cerrar el resultset */
$result->close();
}?></p></div></div>
<h2><h4><div class="text-muted">Pedidos</div></h2></h4>
</div>
</div>
				</div>
			</div>
		





	
		<div class="row">
			<div class="col-xs-8 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						
						
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                   <script type="text/javascript">

                     // Load the Visualization API and the corechart package.
                     google.charts.load('current', {'packages':['corechart']});

                     // Set a callback to run when the Google Visualization API is loaded.
                     google.charts.setOnLoadCallback(drawChart);

                     // Callback that creates and populates a data table,
                     // instantiates the pie chart, passes in the data and
                     // draws it.
                     function drawChart() {

                       // Create the data table.
                       var data = new google.visualization.DataTable();
                       data.addColumn('string', 'Topping');
                       data.addColumn('number', 'Slices');

                       @foreach($products as $p )
                    data.addRows([
                         ["{{ $p->nombre}}",1]
                                                  ]);
                                                     @endforeach;


                       // Set chart options
                       var options = {'title':'Productos',
                                      'width':1400,
                                      'height':1300};

                       // Instantiate and draw our chart, passing in some options.
                       var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                       chart.draw(data, options);
                     }
                   </script>

                <div id="chart_div"></div>

					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Comments</h4>
						  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <div id="chart"></div>

  <script >
  	google.charts.load('current', {packages: ['corechart', 'line']});
google.charts.setOnLoadCallback(drawCurveTypes);

function drawCurveTypes() {
      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'Ventas');
      data.addColumn('number', 'Pedidos');






      data.addRows([
        [0, 0, 0],    [1, <?php echo $nVentas; ?>, <?php echo $nPedido; ?>],  
       
      ]);

      var options = {
        hAxis: {
          title: 'Tiempo'
        },
        vAxis: {
          title: 'Mas uso'
        },
        series: {
          1: {curveType: 'function'}
        }
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart'));
      chart.draw(data, options);
    }


  </script>
						
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>New Users</h4>
						<div class="easypiechart" id="easypiechart-teal" data-percent="56" ><span class="percent">56%</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Visitors</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="27" ><span class="percent">27%</span></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->

				</div>
			</div>



		<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script> 
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>

</body>
</html>
