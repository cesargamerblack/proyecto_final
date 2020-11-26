<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Bienvenido(a) - Pepe Ganga</title>
  <link rel="shortcut icon" href="../imagenes/LogoPG.png">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
  <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/_all-skins.css')}}">
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset('bootstrap-select.min.css')}}">
  <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
  <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.8.2/css/all.css')}}">

</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">

      <!-- Logo -->
      <a href="dashboard" class="logo">
        

        <span class="logo-lg"><b>Pepe Ganga</b></span>
      </a>

      <nav class="navbar navbar-static-top" role="navigation">
       
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Navegación</span>
        </a>
        
        <div class="session p-2">
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav ">
             
              <li class="dropdown session user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <small class="btn-primary">En linea  </small>
                  
                <span class="">{{ Auth::user()->name }}</span>
                  
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../public/imagenes/LogoPG.png">
  
                    <p>
                      Pepe Ganga 
                    </p>
                  </li>
  
                  <!--Footer-->
                  <li class="user-footer">
                                         
                    <div class="pull-right">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: hidden;">
                            @csrf
                            <button class="btn btn-outline-primary" type="submit">Cerrar Sesion</button>
                        </form>
  
  
                    </div>
                  </li>
                  
                </ul>
              </li>
  
            </ul>
          </div>
        </div>

      </nav>
    </header>
    
    <aside class="main-sidebar">
     
      <section class="sidebar">
        
        <ul class="sidebar-menu">
          <li class="header">
            
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-briefcase"></i>
              <span>Escritorio</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('escritorio/estadisticas')}}"><i class="fa fa-circle-o"></i> Estadisticas</a></li>
              </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-laptop"></i>
              <span>Almacén</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>                 
            <ul class="treeview-menu">
              <li><a href="{{url('almacen/articulo')}}"><i class="fa fa-circle-o"></i> Artículos</a></li>
              <li><a href="{{url('almacen/categoria')}}"><i class="fa fa-circle-o"></i> Categorías</a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-th"></i>
              <span>Compras</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('compras/ingreso')}}"><i class="fa fa-circle-o"></i> Ingresos</a></li>
              <li><a href="{{url('compras/proveedor')}}"><i class="fa fa-circle-o"></i> Proveedores</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-shopping-cart"></i>
              <span>Ventas</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('ventas/venta')}}"><i class="fa fa-circle-o"></i> Ventas</a></li>
              <li><a href="{{url('ventas/cliente')}}"><i class="fa fa-circle-o"></i> Clientes</a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-user"></i> <span>Acceso</span>
              <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{url('seguridad/usuario')}}"><i class="fa fa-circle-o"></i> Usuarios</a></li>
              <li><a href="{{url('seguridad/roles')}}"><i class="fa fa-circle-o"></i> Roles</a></li>
            </ul>
          </li>
         </ul>
      </section>
      <!-- /.sidebar -->
    </aside>





    <!--Contenido-->
    
    <div class="content-wrapper">

      
      <section class="content">

        <div class="row">
          <div class="col-md-12">
            <div class="box">
              <div class="box-header with-border">
                <h3 class="box-title">Sistema de punto de venta de Pepe Ganga</h3>
                <div class="box-tools pull-right">
                  <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

                  <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              </div>
              
              <div class="box-body">
                <div class="row">
                  <div class="col-md-12">


                    <!--Contenido-->
                    @yield('contenido')
                    <!--Fin Contenido-->



                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
    </div>
  </div>

  </section>
  </div>


  <!--Fin-Contenido-->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      
    </div>
    <center>
    <strong>Copyright &copy; 2020 <a href="www.cpiprodesign.com">Pepe Ganga</a>.</strong> Todos los derechos son reservados.
    </center>
  </footer>


  <!-- jQuery-->
  <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
  @stack('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>

  <!-- Bootstrap-->
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('js/app.min.js')}}"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="{{asset('js/bootstrap-select.min.js')}}"></script>
</body>

</html>