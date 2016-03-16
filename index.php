<!DOCTYPE html>
<html lang="en" class="app-fluid">
<head>
    <meta charset="utf-8" />
    <title> Rap.Haus | Web Application</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="js/jPlayer/jplayer.flat.css" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/simple-line-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/font.css" type="text/css" />
    <link rel="stylesheet" href="css/app.css" type="text/css" />
    <link rel="stylesheet" href="js/datatables/datatables.css" type="text/css"/>

    <style>
        #bg {
            position: fixed;
            top: 0;
            left: 0;

            /* Preserve aspet ratio */
            min-width: 100%;
            min-height: 100%;
        }

        #userCategories{
            width:300px;
            height:200px;
            position:absolute;
            left:50%;
            top:300%;
            margin:-100px 0 0 -150px;
            z-index: 9999 !important;
        }
    </style>

    <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
    <![endif]-->
</head>
<body class="">
<section class="vbox">
    <header class="bg-success lter navbar-fixed-top header header-md navbar navbar-fixed-top-xs">
        <div class="navbar-header aside dker">
            <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
                <i class="icon-list"></i>
            </a>
            <a href="index.html" class="navbar-brand text-lt">
                <i class="icon-earphones"></i>
                <img src="images/logo_white.png" alt="." class="hide">
                <span class="hidden-nav-xs m-l-sm">Rap.Haus</span>
            </a>
            <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".user">
                <i class="icon-settings"></i>
            </a>
        </div>      <ul class="nav navbar-nav hidden-xs">
            <li>
                <a href="#nav,.navbar-header" data-toggle="class:nav-xs,nav-xs" class="text-muted">
                    <i class="fa fa-indent text"></i>
                    <i class="fa fa-dedent text-active"></i>
                </a>
            </li>
        </ul>
        <div class="navbar-right ">
            <ul class="nav navbar-nav m-n hidden-xs nav-user user">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle bg clear" data-toggle="dropdown">
              <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                <img src="https://socialbelly.com/assets/icons/blank_user-586bd979abac4d7c7007414f5e94fe71.png" alt="...">
              </span>
                        Guest <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight">
                        <li>
                            <span class="arrow top"></span>
                            <a href="#">Sign In</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
    <!--<div id="userCategories">
      <a href="#" class="btn btn-default btn-lg btn-block"><i class="fa fa-bars pull-right"></i> Block button with icon</a>
      <a href="#" class="btn btn-default btn-lg btn-block"><i class="fa fa-bars pull-right"></i> Block button with icon</a>
      <a href="#" class="btn btn-default btn-lg btn-block"><i class="fa fa-bars pull-right"></i> Block button with icon</a>
    </div>-->
    <section>
        <!-- /.aside --><!--
        <section id="content">
          <img src="images/unbounce.png" id="bg" alt="">
        </section>
        -->
        <img src="images/unbounce.png" id="bg" alt="">
        <section id="content" class="m-t-lg wrapper-md animated fadeInUp">
            <div class="container aside-xl">
                <a class="navbar-brand block" href="index.html"><span class="h1 font-bold">Choose your space</span></a>
                <section class="m-b-lg">
                    <form action="#">
                        </br></br></br></br></br>
                        <a href="signup.html" class="btn btn-lg btn-success btn-block rounded">Artist</a>
                        <a href="signup.html" class="btn btn-lg btn-success btn-block rounded">Fan</a>
                        <a href="signup.html" class="btn btn-lg btn-success btn-block rounded">Producer</a>
                    </form>
                </section>
            </div>
        </section>
    </section>
</section>
<script src="js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.js"></script>
<!-- App -->
<script src="js/app.js"></script>
<script src="js/slimscroll/jquery.slimscroll.min.js"></script>
<script src="js/datatables/jquery.dataTables.min.js"></script>
<script src="js/datatables/jquery.csv-0.71.min.js"></script>
<script src="js/datatables/demo.js"></script>
<script src="js/app.plugin.js"></script>
<script type="text/javascript" src="js/jPlayer/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="js/jPlayer/add-on/jplayer.playlist.min.js"></script>
<script type="text/javascript" src="js/jPlayer/demo.js"></script>
</body>
</html>