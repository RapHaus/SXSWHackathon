<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();

if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8" />
    <title>Rap.Haus | Web Application</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="js/jPlayer/jplayer.flat.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/simple-line-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/font.css" type="text/css" />
    <link rel="stylesheet" href="css/app.css" type="text/css" />
    <script type="text/JavaScript" src="js/sha512.js"></script>
    <script type="text/JavaScript" src="js/forms.js"></script>
    <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
    <![endif]-->
</head>
<body class="bg-info dker">
<section id="content" class="m-t-lg wrapper-md animated fadeInUp">
    <div class="container aside-xl">
        <a class="navbar-brand block" href="index.html"><span class="h1 font-bold">Rap.Haus</span></a>
        <section class="m-b-lg">
            <header class="wrapper text-center">
                <strong>Sign in to get in touch</strong>
            </header>
            <?php
            if (isset($_GET['error'])) {
                  echo '<div class="alert alert-danger">';
                  echo '<button type="button" class="close" data-dismiss="alert">×</button>';
                  echo '<i class="fa fa-ban-circle"></i><strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up</a> and try submitting again.';
                  echo '</div>';
                  echo '<p class="error">Error Logging In!</p>';
            }
            ?>
            <?php
            if (login_check($mysqli) == true) {
                echo '<div class="alert alert-danger">';
                echo '<button type="button" class="close" data-dismiss="alert">×</button>';
                echo '<i class="fa fa-ban-circle"></i><strong>You are already logged in </strong> <a href="#" class="alert-link"></a> ';
                echo $logged . ' as ' . htmlentities($_SESSION['username']);
                echo '</br/br>Do you want to change user? <a href="includes/logout.php">Log out</a>.</p>';
                echo '</div>';

            } else {

            }
            ?>
            <form action="includes/process_login.php" method="post" name="login_form">
                <div class="form-group">
                    <input type="email" placeholder="Email" name="email" class="form-control rounded input-lg text-center no-border">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" placeholder="Password" class="form-control rounded input-lg text-center no-border">
                </div>
                <button type="submit" value="login" onclick="formhash(this.form, this.form.password);" class="btn btn-lg btn-warning lt b-white b-2x btn-block btn-rounded"><i class="icon-arrow-right pull-right"></i><span class="m-r-n-lg">Sign in</span></button>
                <!--<div class="text-center m-t m-b"><a href="#"><small>Forgot password?</small></a></div>-->
                <div class="line line-dashed"></div>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a href="signup.html" class="btn btn-lg btn-info btn-block rounded">Create an account</a>
            </form>
        </section>
    </div>
</section>
<!-- footer -->
<footer id="footer">
    <div class="text-center padder">
        <p>
            <small></small>
        </p>
    </div>
</footer>
<!-- / footer -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.js"></script>
<!-- App -->
<script src="js/app.js"></script>
<script src="js/slimscroll/jquery.slimscroll.min.js"></script>
<script src="js/app.plugin.js"></script>
<script type="text/javascript" src="js/jPlayer/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="js/jPlayer/add-on/jplayer.playlist.min.js"></script>
<script type="text/javascript" src="js/jPlayer/demo.js"></script>
</body>
</html>