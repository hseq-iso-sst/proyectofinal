<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logov2.png">
    <title>Login</title>
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <style>
        .p-3 img{
            width:150px;
        }
        .B1{
            background:#F4F1ED;
            margin:10px;
            padding:8px 12px;
            border-radius:5px;
        } 
        .B1 a{
            color:#000;
        }
        .B1:hover{
            background: #F5F51B;
        }
        .dos button {
            background:#F4F1ED;
            margin:10px;
            padding:8px 12px;
            border-radius:10px;
        } 
        .dos button:hover{
            background: #F5F51B;
        }
       
        
    

    </style>

    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative"
            style="background:url(../assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="auth-box row">
                <div class="col-lg-7 col-md-5 modal-bg-img" style="background-image: url(../assets/images/big/pintura3.png);">
                <button  class="border border-warning B1"> <a href="../one_page/index.php">Inicio</a></button>
                </div>
                <div class="col-lg-5 col-md-7 bg-white">
                    <div class="p-3">
                        <div class="text-center">
                            <img src="../one_page/img/logov2.png" alt="logo-empresa">
                        </div>
                        <h2 class=" text-center">Iniciar Sesión</h2>
                        <p class="text-center">Ingrese su dirección de correo electrónico y contraseña</p>
                        <form class="mt-4" action="../controllers/iniciarSesion.php" method="POST">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class=".text-dark" for="uname" >Usuario</label>
                                        <input class="form-control" id="email_user"  name="email_user" type="text"
                                            placeholder="Ingrese su correo">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class=".text-dark" for="password_user">Contraseña</label>
                                        <input class="form-control" id="password_user"  type="password" name="password_user"
                                            placeholder="***********">
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center dos">
                                <button class="border border-warning">Iniciar Sesión</button>
                                    <!-- <a href="#" type="submit" class="btn btn-block btn-dark">Iniciar Sesiòn</a> -->
                                </div>
                                <div class="col-lg-12 text-center mt-5 go">
                                      <a href="#" class="text-warning">¿Olvidaste tu cuenta o contraseña?</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $(".preloader ").fadeOut();
    </script>
</body>

</html>