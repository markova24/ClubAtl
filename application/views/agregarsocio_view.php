<!DOCTYPE html>
<html lang="en">

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

    <body>

        <div id="wrapper">

            <!-- Navigation -->
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

            <!-- Contenido de la Pagina -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <form class="form-horizontal" method="post" action="<?php echo site_url("socios_controller/agregarsocio") ?>">
                            <fieldset>

                                <!-- Nombre del Formulario -->
                                <legend>Nuevo Socio</legend>

                                <!-- Text Input Socio Nº-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="textinput">Socio Nº:</label>  
                                    <div class="col-md-2">
                                        <input id="textinput" name="idSocio" type="text" placeholder="" class="form-control input-md">

                                    </div>
                                </div>

                                <!-- Text Input NomYAp-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="nombre">Nombre y Apellido:</label>  
                                    <div class="col-md-5">
                                        <input id="nombre" name="nombre" type="text" placeholder="" class="form-control input-md" required="">

                                    </div>
                                </div>

                                <!-- Text Input Nacionalidad-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="textinput">Nacionalidad:</label>  
                                    <div class="col-md-4">
                                        <input id="textinput" name="nacionalidad" type="text" placeholder="" class="form-control input-md">

                                    </div>
                                </div>

                                <!-- Appended Input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="appendedtext">Fecha de nacimiento:</label>
                                    <div class="col-md-4">
                                        <div class="input-group">
                                            <input id="appendedtext" name="fecha_nac" class="form-control" placeholder="placeholder" type="text">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                        </div>
                                        <p class="help-block">AAAA/MM/dd</p>
                                    </div>
                                </div>
                                <!-- Select Basic -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="selectEstadoCivil">Estado civil:</label>
                                    <div class="col-md-4">
                                        <select id="selectEstadoCivil" name="estadoCivil" class="form-control">
                                            <option value="Soltero/a">Soltero/a</option>
                                            <option value="Casado/a">Casado/a</option>
                                            <option value="Divorciado/a">Divorciado/a</option>
                                            <option value="Viudo/a">Viudo/a</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="textinput">DNI:</label>  
                                    <div class="col-md-4">
                                        <input id="textinput" name="dni" type="text" placeholder="" class="form-control input-md">

                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="textinput">Domicilio de cobro:</label>  
                                    <div class="col-md-4">
                                        <input id="textinput" name="dom_cobro" type="text" placeholder="" class="form-control input-md">

                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="textinput">Domicilio particular:</label>  
                                    <div class="col-md-4">
                                        <input id="textinput" name="dom_particular" type="text" placeholder="" class="form-control input-md" required="">

                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="textinput">Teléfono:</label>  
                                    <div class="col-md-5">
                                        <input id="textinput" name="telefono" type="text" placeholder="" class="form-control input-md">

                                    </div>
                                </div>

                                <!-- Select Basic -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="selectCalidadSocio">Calidad de socio</label>
                                    <div class="col-md-4">
                                        <select id="selectCalidadSocio" name="calidadSocio" class="form-control">
                                            <option value="Activo">Activo</option>
                                            <option value="Cadete">Cadete</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="textinput">Facebook:</label>  
                                    <div class="col-md-5">
                                        <input id="textinput" name="facebook" type="text" placeholder="" class="form-control input-md">

                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="textinput">E-mail:</label>  
                                    <div class="col-md-5">
                                        <input id="textinput" name="email" type="email" placeholder="" class="form-control input-md">

                                    </div>
                                </div>

                                <!-- File Button --> 
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="fotoButton">Foto:</label>
                                    <div class="col-md-4">
                                        <input id="fotoButton" name="fotoButton" class="input-file" type="file">
                                    </div>
                                </div>


                                <!-- Boton Agregar Socio -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="buttonAgregarSocio"></label>
                                    <div class="col-md-4">
                                        <input class="btn btn-primary" type="submit" value="Agregar Socio" />
                                    </div>
                                </div>

                            </fieldset>
                        </form>


                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js'); ?>"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js'); ?>"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo base_url('assets/bower_components/metisMenu/dist/metisMenu.min.js'); ?>"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url('assets/dist/js/sb-admin-2.js'); ?>"></script> 

        <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>

    </body>

</html>
