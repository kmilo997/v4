<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>INVENTARIO</title>
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.bmp">
</head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(images/slider/1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig"><span>Lacteos La palmera</span></h1>
            <p class="animated fadeInRightBig">EMPRESA DE LACTEOS LA PALMERA</p>
           
              @guest
                           <a data-scroll class="btn btn-start animated fadeInUpBig" href="{{ route('login') }}"><i class="fa fa-sign-in fa-2x" aria-hidden="true"></i>&nbsp;  LOGIN </a>
                           <!-- <li><a data-scroll class="btn btn-start animated fadeInUpBig" href="{{ route('register') }}">Register</a> -->
                            </li>


                        @else
                            <li class="dropdown">
                                <a data-scroll class="btn btn-start animated fadeInUpBig dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                

                                <BR><BR><BR><BR><ul class="dropdown-menu" role="menu">


                                <li>



                                <a href="{{ route('products.index') }}"
                                            >
                                            PRODUCTOS
                                        </a>




                                        <a href="{{ route('pedidoAdmin.index') }}"
                                            >
                                            PEDIDOS
                                        </a>

                                        <a href="{{ route('cliente.index') }}"
                                            >
                                            CLIENTES
                                        </a>


                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            SALIR
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/2.jpg)">
          <div class="caption">         
            <h1 class="animated fadeInLeftBig"><span>Lacteos La palmera</span></h1>
            <p class="animated fadeInRightBig">EMPRESA DE LACTEOS LA PALMERA</p>
            @guest
                           <a data-scroll class="btn btn-start  animated fadeInUpBig" href="{{ route('login') }}"><i class="fa fa-sign-in fa-2x" aria-hidden="true"></i>&nbsp;  LOGIN </a>
                            </li>


                        @else
                            <li class="dropdown">
                                <a data-scroll class="btn btn-start animated fadeInUpBig dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                

                                <BR><BR><BR><BR><ul class="dropdown-menu" role="menu">


                                <li>

                                <a href="{{ route('products.index') }}"
                                            >
                                            PRODUCTOS
                                        </a>




                                        <a href="{{ route('pedidoAdmin.index') }}"
                                            >
                                            PEDIDOS
                                        </a>

                                        <a href="{{ route('cliente.index') }}"
                                            >
                                            CLIENTES
                                        </a>


                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            SALIR
                                        </a>

                                      



                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
        </div>
        
        </div>
      </div>
      

       
 
  </footer>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

</body>
</html>