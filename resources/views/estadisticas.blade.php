<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>La palmera</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/datepicker3.css')}}" rel="stylesheet">
    <link href="{{asset('css/styles.css')}}" rel="stylesheet">

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

          @yield('titulo')
        </ul>
    </div><!--/.sidebar-->

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">

        <div class="row">
          <div class="panel panel-container">
            <div class="row">
              <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-teal panel-widget border-right">
                  <div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
                    <div class="large">120</div>
                    <div class="text-muted">New Orders</div>
                  </div>
                </div>
              </div>
              <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-blue panel-widget border-right">
                  <div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
                    <div class="large">52</div>
                    <div class="text-muted">Comments</div>
                  </div>
                </div>
              </div>
              <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-orange panel-widget border-right">
                  <div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
                    <div class="large">24</div>
                    <div class="text-muted">New Users</div>
                  </div>
                </div>
              </div>
              <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
                <div class="panel panel-red panel-widget ">
                  <div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
                    <div class="large">25.2k</div>
                    <div class="text-muted">Page Views</div>
                  </div>
                </div>
              </div>
            </div><!--/.row-->

  <div id="page-inner">
            <div class="row">
              <div class="col-md-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    Site Traffic Overview

                     

                							 <div class="panel-body">



                      <!--Load the AJAX API-->
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

                             data.addColumn('Productos', 'Registrados');
                             data.addRows([

                               @foreach($products as $p )
                               {{ $p->nombre}}
                               @endforeach;

                             ]);

                             // Set chart options
                             var options = {'title':'Reporte productos',
                                            'width':400,
                                            'height':300};

                             // Instantiate and draw our chart, passing in some options.
                             var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                             chart.draw(data, options);
                           }
                         </script>




                    </div>
                  </div>
                </div>
              </div>
            </div><!--/.row--




               </div><!-- /.col-->

        </div><!-- /.row -->
    </div><!--/.main-->

<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/chart.min.js')}}"></script>
    <script src="{{asset('js/chart-data.js')}}"></script>
    <script src="{{asset('js/easypiechart.js')}}"></script>
    <script src="{{asset('js/easypiechart-data.js')}}"></script>
    <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>

</body>
</html>
