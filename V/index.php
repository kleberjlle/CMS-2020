<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ktag</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="../FW/AdminLTE-3.0.4/plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="../FW/AdminLTE-3.0.4/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
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
                    <p class="login-box-msg">Área Restrita</p>
                    <form action="../C/verifica.php" method="post">
                        <div class="form-group">
                        <label class="col-form-label" for="email">
                            <?php
                                if(isset($_GET['msg1'])){
                                    echo "<i class=\"fas fa-bell\"></i> ".$_GET['msg1'];
                                }                   
                            ?>
                        </label>
                            <input type="email" name="email" class="form-control <?php if(isset($_GET['msg1'])){echo "is-warning";} if(isset($_GET['msg2'])){echo "is-valid";} ?>" <?php echo isset($_GET['email']) ? "value=\"{$_GET['email']}\"" : "" ?> id="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label" for="senha">
                                <?php
                                if(isset($_GET['msg2'])){
                                    echo "<i class=\"fas fa-check\"></i>".$_GET['msg2'];
                                }
                                ?>
                            </label>
                            <input type="password" name="senha" class="form-control <?php if(isset($_GET['msg2'])){echo "is-warning";} ?>" id="senha" placeholder="Senha" required>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="icheck-primary">
                                    <button type="submit" class="btn btn-success btn-block">Acessar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <form action="recuperaAcesso.php">
                        <div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="icheck-primary">
                                        <button type="submit" class="btn btn-primary btn-block">Recuperar Acesso</button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.login-box -->

            <!-- jQuery -->
            <script src="../FW/AdminLTE-3.0.4/plugins/jquery/jquery.min.js"></script>
            <!-- Bootstrap 4 -->
            <script src="../FW/AdminLTE-3.0.4/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- AdminLTE App -->
            <script src="../FW/AdminLTE-3.0.4/dist/js/adminlte.min.js"></script>

    </body>
</html>