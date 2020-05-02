<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ktag</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap 4 -->

        <!-- Font Awesome -->
        <link rel="stylesheet" href="../FW/AdminLTE-3.0.4/plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../FW/AdminLTE-3.0.4/dist/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="#"><b>K</b>tag</a>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <?php
                    if(isset($_GET['codigo']) && isset($_GET['msg'])){
                        if($_GET['codigo'] == "S03"){
                            $status = "success";
                            $icone = "check";
                            $titulo = "Sucesso!";
                            $msg = $_GET['msg'];
                        
                            echo <<<HTML
                            <div class ="alert alert-$status alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-$icone"></i> $titulo</h5>
                                    $msg
                            </div>
HTML;
                    }
                    if($_GET['codigo'] == "E02"){
                            $status = "danger";
                            $icone = "ban";
                            $titulo = "Erro!";
                            $msg = $_GET['msg'];
                        
                            echo <<<HTML
                            <div class ="alert alert-$status alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-$icone"></i> $titulo</h5>
                                    $msg
                            </div>
HTML;
                    }
                    
                }
                    
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>