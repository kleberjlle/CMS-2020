<!DOCTYPE html>
<?php
    $_GET['msg1'] = base64_encode(date("Y-m-d H:i:s"));//teste
    $_GET['msg2'] = base64_encode("kleberjlle@gmail.com");//teste
//se recbeu variável msg1 e msg2 via GET
    if(isset($_GET['msg1']) && isset($_GET['msg2'])){
        $data = base64_decode($_GET['msg1']);//decodifica msg1 e armazena na data
        $email = base64_decode($_GET['msg2']);//decodifica msg2 e armazena no email
    }else{
        $ip = filter_var($_SERVER["REMOTE_ADDR"], FILTER_VALIDATE_IP);//armazena o IP de quem tentar acessar a página
        $erro = alertas('E06').$ip;//mensagem de erro com o endereço de IP de acesso
        header("Location: index.php?erro={$erro}");//redireciona para a página idex com a mensagem de erro
    }
?>
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
                    <p class="login-box-msg">Recuperar Acesso</p>
                    <form action="../C/verificaAlteraSenha.php" method="post">
                        <div class="form-group">
                            <label class="col-form-label" for="senha"></label>
                            <input type="password" name="senha" class="form-control" id="senha" placeholder="Nova senha" autofocus required>
                            <input type="hidden" name="email" value="<?php echo $email; ?>" class="form-control" required>
                            <input type="hidden" name="data" value="<?php echo $data; ?>" class="form-control" required>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="icheck-primary">
                                    <button type="submit" class="btn btn-success btn-block">Alterar Senha</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                </div>
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