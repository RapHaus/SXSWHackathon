<?php
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
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
<?php
if (!empty($error_msg)) {
    echo $error_msg;
}
?>
<section id="content" class="m-t-lg wrapper-md animated fadeInDown">
    <div class="container aside-xl">
        <a class="navbar-brand block" href="index.html"><span class="h1 font-bold">Rap.Haus</span></a>
        <section class="m-b-lg">
            <header class="wrapper text-center">
                <!--<strong>Sign up</strong>-->
            </header>
            <form action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>"
                  method="post"
                  name="registration_form">
                <div class="form-group">
                    <input placeholder="Username" type='text' name='username' id='username' class="form-control rounded input-lg text-center no-border">
                </div>
                <div class="form-group">
                    <input placeholder="First Name" type='text' name='firstname' id='firstname' class="form-control rounded input-lg text-center no-border">
                </div>
                <div class="form-group">
                    <input placeholder="Last Name" type='text' name='lastname' id='lastname' class="form-control rounded input-lg text-center no-border">
                </div>
                <div class="form-group">
                    <input type="text" name='email' id='email' placeholder="Email" class="form-control rounded input-lg text-center no-border">
                </div>
                <div class="form-group">
                    <input type="password" name='password' id='password' placeholder="Password" class="form-control rounded input-lg text-center no-border">
                </div>
                <div class="form-group">
                    <input type="password" name='confirmpwd' id='confirmpwd' placeholder="Re-Enter Password" class="form-control rounded input-lg text-center no-border">
                </div>
                <div class="checkbox i-checks m-b">
                    <label class="m-l">
                        <input type="checkbox" checked=""><i></i> Agree the <a href="#">terms and policy</a>
                    </label>
                </div>
                <button type="button" type="button"
                        value="Register"
                        onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.firstname,
                                   this.form.lastname,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);" class="btn btn-lg btn-warning lt b-white b-2x btn-block btn-rounded"><i class="icon-arrow-right pull-right"></i><span class="m-r-n-lg">Sign up</span></button>
                <div class="line line-dashed"></div>
                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a href="signin.html" class="btn btn-lg btn-info btn-block btn-rounded">Sign in</a>
            </form>
        </section>
    </div>
</section>
<!-- footer -->
<footer id="footer">
    <div class="text-center padder clearfix">
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