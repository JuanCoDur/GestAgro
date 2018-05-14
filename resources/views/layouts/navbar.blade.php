<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">
                <img src="image/logo.png" height="53px" weight="53px">                
            </a>
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
                </a>
            </li>            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ auth()->user()->name }} <b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">                	
                    <!--<li><a href="#"><i class="fa fa-fw fa-user"></i> perfil</a></li>-->
                    <li><a href="#">{{ auth()->user()->email }}</a></li>
                    <li><a href="#"><i class="fa fa-fw fa-cog"></i>Editar</a></li>
                    <li class="divider"></li>
                    <li><a class="white-text" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-fw fa-power-off"></i>Cerrar Session
                                        </a>
			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-search"></i> Finca <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-1" class="collapse">
                        <li><a href="{{ route('finca.index') }}"><i class="fa fa-angle-double-right"></i>Listado y edición</a></li>
                        <li><a href="{{ route('predio.index') }}"><i class="fa fa-angle-double-right"></i>Predio</a></li>
                        <li><a href="{{ route('pozo.index') }}"><i class="fa fa-angle-double-right"></i>Pozos</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-star"></i>  Recursos humanos <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-2" class="collapse">
                        <li><a href="{{ route('empleado.index') }}"><i class="fa fa-angle-double-right"></i> Empleados</a></li>
        
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-3"><i class="fa fa-fw fa-star"></i>  Recursos materiales <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-3" class="collapse">
                        <li><a href="{{ route('maqui.index') }}"><i class="fa fa-angle-double-right"></i> Maquinaria</a></li>
                        <li><a href="{{ route('vehic.index') }}"><i class="fa fa-angle-double-right"></i> Vehiculos</a></li>
                        <li><a href="{{ route('tipveh.index') }}"><i class="fa fa-angle-double-right"></i> Tipo Vehiculos</a></li>
                        <li><a href="{{ route('marca.index') }}"><i class="fa fa-angle-double-right"></i> Marcas</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" data-toggle="collapse" data-target="#submenu-4"><i class="fa fa-fw fa-star"></i>  Productos <i class="fa fa-fw fa-angle-down pull-right"></i></a>
                    <ul id="submenu-4" class="collapse">
                        <li><a href="{{ route('prod.index') }}"><i class="fa fa-angle-double-right"></i> listado y edicion</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Inventario</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Compras</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Ventas</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('clients.index') }}"><i class="fa fa-fw fa-star"></i>  Clientes</a>
                </li>
                <li>
                    <a href="{{ route('prov.index') }}"><i class="fa fa-fw fa-star"></i> Proveedores</a>
                </li>
                <li>
                    <a href="{{ route('activities.index') }}"><i class="fa fa-fw fa-user-plus"></i>Actividades</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-paper-plane-o"></i> menu3</a>
                </li>
                <li>
                    <a href="faq"><i class="fa fa-fw fa fa-question-circle"></i> MENU 5</a>
                </li>

            </ul>

        </div>
        <!-- /.navbar-collapse -->
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                <div class="col-sm-12 col-md-12 well" id="content">
                    @yield('content')
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->