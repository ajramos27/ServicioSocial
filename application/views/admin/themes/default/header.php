<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Servicio Social UADY</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?= base_url() ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?= base_url() ?>assets/admin/css/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="<?= base_url() ?>assets/admin/css/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="<?= base_url() ?>assets/admin/css/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?= base_url() ?>assets/admin/css/styles.css" rel="stylesheet">
        <link href="<?= base_url() ?>assets/admin/css/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?= base_url() ?>assets/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

    </head>

    <body>
      <div class="banner">
        <img src="<?=base_url()?>assets/admin/images/banner2.png" alt="" />
      </div>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i><?=$this->logged_in_name?> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="<?= base_url('admin/users/change_password') ?>"><i class="fa fa-user fa-fw"></i> Cambiar contraseña</a></li>
                            <li class="divider"></li>
                            <li><a href="<?=  base_url('auth/logout')?>"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesión</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <?php if ($this->is_responsable && !$this->is_admin): ?>
                            <li><a href="<?= base_url('responsable') ?>"><i class="fa fa-home fa-fw"></i> Inicio</a></li>
                            <li><a href="<?= base_url('admin/adminresponsable/listAlumnos') ?>"><i class="fa fa-user fa-fw"></i> Prestadores</a></li>
                            <li><a href="<?= base_url('admin/adminresponsable/listProyectos') ?>"><i class="fa fa-book fa-fw"></i> Proyectos</a></li>
                            <?php endif; ?>
                            <?php if ($this->is_prestador): ?>
                            <li><a href="<?= base_url('admin/adminprestador') ?>"><i class="fa fa-home fa-fw"></i> Inicio</a></li>
                            <?php endif; ?>
                            <?php if ($this->is_admin): ?>
                              <li><a href="<?= base_url('admin/') ?>"><i class="fa fa-home fa-fw"></i> Inicio</a></li>
                              <li><a href="<?= base_url('alumnos') ?>"><i class="fa fa-user fa-fw"></i> Prestadores</a></li>
                              <li><a href="<?= base_url('responsables') ?>"><i class="fa fa-user fa-fw"></i> Responsables</a></li>
                              <li><a href="<?= base_url('proyectos') ?>"><i class="fa fa-book fa-fw"></i> Proyectos</a></li>
                              <li><a href="<?= base_url('dependencias') ?>"><i class="fa fa-university fa-fw"></i> Dependencias</a></li>
                              <li><a href="<?= base_url('reportes') ?>"><i class="fa fa-file-text fa-fw"></i> Reportes</a></li>
                              <li><a href="<?= base_url('admin/users') ?>"><i class="fa fa-users fa-fw"></i> Usuarios</a></li>
                            <?php endif; ?>



                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
