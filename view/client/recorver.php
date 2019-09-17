
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Recorver Pass | Izi Change</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo  BASE_URL_THEME; ?>plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo  BASE_URL_THEME; ?>plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo  BASE_URL_THEME; ?>plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo  BASE_URL_THEME; ?>css/style.css" rel="stylesheet">
</head>

<body class="signup-page bg-teal">
    

<div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="/client/pu_savePass">
                <input type="hidden" name="id" value="<?= $idclient ;?>">
                <input type="hidden" name="token" value="<?= $token ;?>">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" minlength="6" class="form-control" name="repassword" placeholder="Password" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" minlength="6" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">Changer</button>
                        </div>
                    </div>
                   <?php echo $this->Session->flash(); ?>
                </form>
            </div>
        </div>
        
    <!-- Jquery Core Js -->
    <script src="<?php echo  BASE_URL_THEME; ?>plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo  BASE_URL_THEME; ?>plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo  BASE_URL_THEME; ?>plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="<?php echo  BASE_URL_THEME; ?>plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo  BASE_URL_THEME; ?>js/admin.js"></script>
    <script src="<?php echo  BASE_URL_THEME; ?>js/pages/examples/sign-up.js"></script>
</body>

</html>