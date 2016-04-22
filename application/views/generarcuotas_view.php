<!DOCTYPE html>
<!--
Copyright (C) 2016 Usuario

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Sistema Gestión Club Atlético Uruguay</title>

        <!-- Bootstrap Core CSS -->
        <link href= "<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url('assets/bower_components/metisMenu/dist/metisMenu.min.css'); ?>" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url('assets/dist/css/sb-admin-2.css'); ?>" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
</head>
<body>
    <!-- Barra Navegacion -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Mostrar menú...</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Sistema de Gestión CAU</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">

            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil de usuario</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Opciones</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user fa-fw"></i> Socios<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Agregar nuevo socio</a>
                            </li>
                            <li>
                                <a href="#">Borrar socio</a>
                            </li>
                            <li>
                                <a href="#">Modificar datos de socio</a>
                            </li>
                            <li>
                                <a href="#">Consultar lista de socios</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-home fa-fw"></i> Grupos Familiares<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Agregar grupo familiar</a>
                            </li>
                            <li>
                                <a href="#">Borrar grupo familiar</a>
                            </li>
                            <li>
                                <a href="#">Modificar grupo familiar</a>
                            </li>
                            <li>
                                <a href="#">Consultar grupo familiar</a>
                            </li>
                        </ul>

                    </li>
                    <li>
                        <a href="#"><i class="fa fa-usd fa-fw"></i> Cuotas<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Generar cuotas</a>
                            </li>
                            <li>
                                <a href="#">Registrar pago</a>
                            </li>
                            <li>
                                <a href="#">Consultar cuotas</a>
                            </li>
                        </ul>

                    <li>
                        <a href="#"><i class="fa fa-edit fa-files"></i> Reportes</a>
                    </li>



                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Generar Cuotas</h1>
                    <p>Por favor seleccione el AÑO, MES y MONTO para cada cuota a generar...</p>

                    <form class="form-horizontal" method="post" action="<?php echo site_url("cuotas_controller/generarcuotas") ?>">
                        <fieldset>

                            <!-- Nombre del Formulario -->
                            <legend>Nuevas cuotas</legend>

                            <!-- Prepended text-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="prependedtext">Monto:</label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">$</span>
                                        <input id="inputMonto" name="inputMonto" class="form-control" placeholder="monto a abonar" type="number" type="number" step="0.1" required>
                                    </div>

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="textinputAño">Año</label>  
                                <div class="col-md-4">
                                    <input id="inputAño" name="inputAño" type="number" min="0" value="<?php echo date("Y"); ?>" placeholder="" class="form-control input-md" required>

                                </div>
                            </div>

                            <!-- Select Basic -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="selectMes">Mes:</label>
                                <div class="col-md-4">
                                    <select id="selectMes" name="inputMes" class="form-control">
                                        <option value="01">Enero</option>
                                        <option value="02">Febrero</option>
                                        <option value="03">Marzo</option>
                                        <option value="04">Abril</option>
                                        <option value="05">Mayo</option>
                                        <option value="06">Junio</option>
                                        <option value="07">Julio</option>
                                        <option value="08">Agosto</option>
                                        <option value="09">Septiembre</option>
                                        <option value="10">Octubre</option>
                                        <option value="11">Noviembre</option>
                                        <option value="12">Diciembre</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Boton Generar Cuotas -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="buttonAgregarSocio"></label>
                                <div class="col-md-4">
                                    <input class="btn btn-primary center-block" type="submit" value="Generar Cuotas" />
                                </div>
                            </div>

                        </fieldset>
                    </form>


                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</body>
</html>
