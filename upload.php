<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
include_once 'includes/nav.php';

sec_session_start();
if(login_check($mysqli) == true) {
$username = htmlentities($_SESSION['username']);
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
    <link rel="stylesheet" href="css/upload.css" type="text/css" />
    <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
    <![endif]-->
</head>
<body class="">
<section class="vbox">
    <header class="bg-white-only header header-md navbar navbar-fixed-top-xs">
        <div class="navbar-header aside bg-success dk">
            <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
                <i class="icon-list"></i>
            </a>
            <a href="index.php" class="navbar-brand text-lt">
                <i class="icon-earphones"></i>
                <img src="images/logo.png" alt="." class="hide">
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
                <img src="images/a0.png" alt="...">
              </span>
                        <?php echo $username; ?> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight">
                        <li>
                            <span class="arrow top"></span>
                            <a href="#">Settings</a>
                        </li>
                        <li>
                            <a href="profile.php">Profile</a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="badge bg-danger pull-right">3</span>
                                Notifications
                            </a>
                        </li>
                        <li>
                            <a href="docs.html">Help</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="includes/logout.php" >Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
    <section>
        <section class="hbox stretch">
            <!-- .aside -->
            <aside class="bg-black dk aside hidden-print" id="nav">
                <section class="vbox">
                    <section class="w-f-md scrollable">
                        <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-railOpacity="0.2">

                            <!--nav -->
                            <nav class='nav-primary hidden-xs' >
                                <ul class='nav bg clearfix' >
                                    <li class='hidden-nav-xs padder m-t m-b-sm text-xs text-muted' >
                                        Discover Beats
                                    </li >
                                    <li >
                                        <a href = 'pick-beats.php' >
                                            <i class='icon-disc icon text-success' ></i >
                                            <span class='font-bold' > What's new</span>
                                        </a>
                                    </li>
                                    <li class='m-b hidden-nav-xs'></li>
                                </ul>
                                <ul class='nav bg clearfix'>
                                    <li class='hidden-nav-xs padder m-t m-b-sm text-xs text-muted'>
                                    <li >
                                        <a href = 'top-music.php' >
                                            <i class='icon-disc icon text-success' ></i >
                                            <span class='font-bold' > Top Music</span>
                                        </a>
                                    </li>
                                    <li class='m-b hidden-nav-xs'></li>
                                </ul>
                                <ul class='nav bg clearfix'>
                                    <li class='hidden-nav-xs padder m-t m-b-sm text-xs text-muted'>
                                        Recording Studio
                                    </li>
                                    <li>
                                        <a href='book-a-studio.php'>
                                            <i class='icon-microphone icon text-success'></i>
                                            <span class='font-bold'>Book a Session</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href='fullcalendar.php'>
                                            <i class='icon-calendar icon text-success'></i>
                                            <span class='font-bold'>My Calendar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href='upload.php'>
                                            <i class='icon-cloud-upload icon text-success'></i>
                                            <span class='font-bold'>Upload</span>
                                        </a>
                                    </li>
                                    <li class='m-b hidden-nav-xs'></li>
                                </ul>
                            </nav>
                            <!-- / nav -->
                        </div>
                    </section>

                    <footer class="footer hidden-xs no-padder text-center-nav-xs">
                        <div class="bg hidden-xs ">
                            <div class="dropdown dropup wrapper-sm clearfix">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="thumb-sm avatar pull-left m-l-xs">                        
                        <img src="images/a3.png" class="dker" alt="...">
                        <i class="on b-black"></i>
                      </span>
                      <span class="hidden-nav-xs clear">
                        <span class="block m-l">
                          <strong class="font-bold text-lt"><?php echo $username; ?></strong>
                          <b class="caret"></b>
                        </span>
                        <span class="text-muted text-xs block m-l">Artist</span>
                      </span>
                                </a>
                                <ul class="dropdown-menu animated fadeInRight aside text-left">
                                    <li>
                                        <span class="arrow bottom hidden-nav-xs"></span>
                                        <a href="#">Settings</a>
                                    </li>
                                    <li>
                                        <a href="profile.php">Profile</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="badge bg-danger pull-right">3</span>
                                            Notifications
                                        </a>
                                    </li>
                                    <li>
                                        <a href="docs.html">Help</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="includes/logout.php" >Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>            </footer>
                </section>
            </aside>
            <!-- /.aside -->
            <section id="content">
                <section class="vbox">
                    <section class="scrollable wrapper">
                        <section class="vbox">
                            <section class="scrollable">
                                <div class="wrapper">
                                    <div class="text-center m-b m-t">
                                        <form id="trackUpload" action="/user/uploads/track" method="POST">
                                            <a href="#" class="thumb-lg">
                                                <img src="images/upload_image.png" class="img-circle">
                                            </a>
                                            <div class="h3 m-t-xs m-b-xs">Upload Track</div>
                                            <label class="h3 m-t-xs m-b-xs btn-upload">
                                                <input type="file" name="fileupload" >
                                                <button class="btn">Browse</button>
                                            </label>
                                            <label class="h3 m-t-xs m-b-xs btn-upload">
                                                <button type="submit" class="btn">Upload Track</button>
                                            </label>
                                        </form>
                                    </div>
                                </div>
                            </section>
                        </section>
                    </section>
                </section>
                <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen,open" data-target="#nav,html"></a>
            </section>
        </section>
    </section>
</section>
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


<?php
} else {
    echo 'You are not authorized to access this page, please login.';
}
?>