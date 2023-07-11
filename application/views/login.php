<!DOCTYPE html>
<html>

<!-- Mirrored from themedesigner.in/demo/myadmin/myadmin/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2016 05:24:03 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMORMAWA</title>
    <link rel="icon" href="<?=base_url()?>assets/unipdu.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url() ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 Shiv and Respond.js IE8 support -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <section id="wrapper" class="login-register">
        <div style="position: fixed; padding-left: 300px; padding-top: 150px">
            <img src="<?php echo base_url() ?>assets/images/unipdu.png">
        </div>
        <div class="login-box" style="padding-top: opx">
            <div class="white-box">
                <br>
                <br>
                <br>
                <br>
                <br>
                <form class="form-horizontal m-t-20" id="loginform" method="POST"
                    action="<?php echo base_url() ?>login">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <h3><i class=""></i> SIMORMAWA</h3>
                            <p class="text-muted">Silahkan login untuk memulai</p>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="username" required="" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="password" required=""
                                placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-5 col-xs-12">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> Remember me </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center m-t-40">
                        <div class="col-xs-12">
                            <button class="btn btn-success btn-lg btn-block text-uppercase waves-effect waves-light"
                                type="submit">Log In</button>
                        </div>
                    </div>
                </form>
            </div>
            <footer class="footer text-center">
                <?php echo date('Y') ?> © hurimen
            </footer>
        </div>
    </section>
    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/myadmin.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>

</body>

<!-- Mirrored from themedesigner.in/demo/myadmin/myadmin/login2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 May 2016 05:24:03 GMT -->

</html>