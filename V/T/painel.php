<!DOCTYPE html>
<?php /*
  session_start();
  include_once '../../C/funcoes.php';

  if(isset($_SESSION['protege']) != "verificaIndex.php"){
  sairSistema();
  } */
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 3 | Dashboard</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="../../FW/AdminLTE-3.0.4/plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="../../FW/AdminLTE-3.0.4/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="../../FW/AdminLTE-3.0.4/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- JQVMap -->
        <link rel="stylesheet" href="../../FW/AdminLTE-3.0.4/plugins/jqvmap/jqvmap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../../FW/AdminLTE-3.0.4/dist/css/adminlte.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="../../FW/AdminLTE-3.0.4/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="../../FW/AdminLTE-3.0.4/plugins/daterangepicker/daterangepicker.css">
        <!-- summernote -->
        <link rel="stylesheet" href="../../FW/AdminLTE-3.0.4/plugins/summernote/summernote-bs4.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>

    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Sobre</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../../C/sair.php" class="nav-link">Sair</a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-danger navbar-badge">1</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../FW/AdminLTE-3.0.4/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Ligue-me sempre que puder ...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i>4 horas atrás</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>

                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">Ver todas as mensagens</a>
                    </div>
                </li>
                <!--
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
                -->
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="../../FW/AdminLTE-3.0.4/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                     style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../../FW/AdminLTE-3.0.4/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">    
                            <?php
                            echo $_SESSION['usuarioAtual'][1];
                            ?>
                        </a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                             with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <ion-icon name="file-tray-stacked" size="small"></ion-icon><!--<i class="nav-icon fas fa-tachometer-alt"></i>-->
                                <p>
                                    Gerenciar contas
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                       <ion-icon name="person-add" size="small"></ion-icon> <!--<i class="far fa-circle nav-icon"></i>-->
                                        <p>Cadastrar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <ion-icon name="create" size="small"></ion-icon><!--<i class="far fa-circle nav-icon"></i>-->
                                        <p>Alterar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Perfil</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Perfil</a></li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle"
                                             src="../../FW/AdminLTE-3.0.4/dist/img/user4-128x128.jpg"
                                             alt="User profile picture">
                                    </div>
                                    <h3 class="profile-username text-center"><?php echo $_SESSION['usuarioAtual'][1]; ?></h3>
                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Nome Completo</b> <a class="float-right"><?php echo $_SESSION['usuarioAtual'][1] . " " . $_SESSION['usuarioAtual'][2]; ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Email</b> <a class="float-right"><?php echo $_SESSION['usuarioAtual'][3]; ?></a>
                                        </li>
                                        <!-- <li class="list-group-item">
                                             <b></b> <a class="float-right"></a>
                                         </li>-->
                                    </ul>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col-md-3-->
                        <div class="col-md-8">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">ALTERAR DADOS</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="nome">Nome</label>
                                            <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome">
                                        </div>
                                        <div class="form-group">
                                            <label for="sobreNome">sobreNome</label>
                                            <input type="text" name="sobreNome" class="form-control" id="sobreNome" placeholder="Sobre Nome">
                                        </div>
                                        <div class="form-group">
                                            <label for="email1">Email</label>
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="senha">Senha</label>
                                            <input type="password"name="senha" class="form-control" id="senha" placeholder="Senha">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Alterar</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                        <!--/.col-md-6-->
                    </div>
                    <!-- /.row-->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2020-2022 <a>Ktag</a>.</strong>
            Todos os direitos reservados.
            <div class="float-right d-none d-sm-inline-block">
                <b>Versão</b> 0.0.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../FW/AdminLTE-3.0.4/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../../FW/AdminLTE-3.0.4/plugins/jquery-ui/jquery-ui.min.js"></script> <!--essa script é responsavel pelos graficos de linha -->
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>-->
    <!-- Bootstrap 4 -->
    <script src="../../FW/AdminLTE-3.0.4/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../../FW/AdminLTE-3.0.4/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../../FW/AdminLTE-3.0.4/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../../FW/AdminLTE-3.0.4/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../../FW/AdminLTE-3.0.4/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../../FW/AdminLTE-3.0.4/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../../FW/AdminLTE-3.0.4/plugins/moment/moment.min.js"></script>
    <script src="../../FW/AdminLTE-3.0.4/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../FW/AdminLTE-3.0.4/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../../FW/AdminLTE-3.0.4/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../../FW/AdminLTE-3.0.4/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../FW/AdminLTE-3.0.4/dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../../FW/AdminLTE-3.0.4/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../FW/AdminLTE-3.0.4/dist/js/demo.js"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script> <!--responsavel pelos icones-->

</html>
