<?php
    include_once 'includes/db_connect.php';
    include_once 'includes/functions.php';

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

    <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
    <![endif]-->
</head>
<body class="">
<section class="vbox">
    <header class="bg-white-only header header-md navbar navbar-fixed-top-xs">
        <div class="navbar-header aside bg-info dk">
            <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
                <i class="icon-list"></i>
            </a>
            <a href="index.html" class="navbar-brand text-lt">
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
        <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
            <div class="form-group">
                <div class="input-group">
            <span class="input-group-btn">
              <button onclick="searchFilterBeats(document.getElementById('beatSearch').value)" class="btn btn-sm bg-white btn-icon rounded"><i class="fa fa-search"></i></button>
            </span>
                    <input type="text" id="beatSearch" class="form-control input-sm no-border rounded" placeholder="Search songs, albums...">
                </div>
            </div>
        </form>
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
                            <a href="modal.lockme.html" data-toggle="ajaxModal" >Logout</a>
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



                            <!-- nav -->
                            <nav class="nav-primary hidden-xs">
                                <ul class="nav bg clearfix">
                                    <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                                        Discover Beats
                                    </li>
                                    <li>
                                        <a href="pick-beats.php">
                                            <i class="icon-disc icon text-success"></i>
                                            <span class="font-bold">What's new</span>
                                        </a>
                                    </li>
                                    <li class="m-b hidden-nav-xs"></li>
                                </ul>
                                <ul class="nav bg clearfix">
                                    <li class="hidden-nav-xs padder m-t m-b-sm text-xs text-muted">
                                        Recording Studio
                                    </li>
                                    <li>
                                        <a href="book-a-studio.php">
                                            <i class="icon-microphone icon text-success"></i>
                                            <span class="font-bold">Book a Session</span>
                                        </a>
                                    </li>
                                    <li class="m-b hidden-nav-xs"></li>
                                </ul>
                            </nav>
                            <!-- / nav -->
                        </div>
                    </section>

                    <footer class="footer no-padder text-center-nav-xs">
                        <div class="bg ">
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
                                        <a href="modal.lockme.html" data-toggle="ajaxModal" >Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>            </footer>
                </section>
            </aside>
            <!-- /.aside -->
            <section id="content">
                <section class="vbox">
                    <section class="scrollable">
                        <section class="hbox stretch">
                            <aside class="aside-lg bg-light lter b-r">
                                <section class="vbox">
                                    <section class="scrollable">
                                        <div class="wrapper">
                                            <div class="text-center m-b m-t">
                                                <a href="#" class="thumb-lg">
                                                    <img src="images/a0.png" class="img-circle">
                                                </a>
                                                <div>
                                                    <div class="h3 m-t-xs m-b-xs"><?php echo $username; ?></div>
                                                    <small class="text-muted"><i class="fa fa-map-marker"></i>Austin, TX</small>
                                                </div>
                                            </div>
                                            <div>
                                                <small class="text-uc text-xs text-muted">about me</small>
                                                <p>Artist</p>
                                                <small class="text-uc text-xs text-muted">info</small>
                                                <p>An emerging rap artist from Austin,TX</p>
                                                <div class="line"></div>
                                                <small class="text-uc text-xs text-muted">connection</small>
                                                <p class="m-t-sm">
                                                    <a href="#" class="btn btn-rounded btn-twitter btn-icon"><i class="fa fa-twitter"></i></a>
                                                    <a href="#" class="btn btn-rounded btn-facebook btn-icon"><i class="fa fa-facebook"></i></a>
                                                    <a href="#" class="btn btn-rounded btn-gplus btn-icon"><i class="fa fa-google-plus"></i></a>
                                                </p>
                                            </div>
                                        </div>
                                    </section>
                                </section>
                            </aside>
                            <aside class="bg-white">
                                <section class="vbox">
                                    <header class="header bg-light lt">
                                        <ul class="nav nav-tabs nav-white">
                                            <li class="active"><a href="#activity" data-toggle="tab">Downloaded Beats</a></li>
                                            <li class=""><a href="#events" data-toggle="tab">Uploads</a></li>
                                            <li class=""><a href="#interaction" data-toggle="tab">Likes</a></li>
                                            <li class=""><a href="#interaction" data-toggle="tab">Upcoming Studio Sessions</a></li>
                                        </ul>
                                    </header>
                                    <section class="scrollable">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="activity">
                                                <section class="scrollable">
                                                    <ul id="beats-container" class="list-group list-group-lg no-radius no-border no-bg m-t-n-xxs m-b-none auto">

                                                    </ul>
                                                </section>
                                            </div>
                                            <div class="tab-pane" id="events">
                                                <div class="text-center wrapper">
                                                    <i class="fa fa-spinner fa fa-spin fa fa-large"></i>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="interaction">
                                                <div class="text-center wrapper">
                                                    <i class="fa fa-spinner fa fa-spin fa fa-large"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </section>
                            </aside>
                        </section>
                    </section>
                    <footer class="footer bg-success dker">
                        <div id="jp_container_N">
                            <div class="jp-type-playlist">
                                <div id="jplayer_N" class="jp-jplayer hide"></div>
                                <div class="jp-gui">
                                    <div class="jp-video-play hide">
                                        <a class="jp-video-play-icon">play</a>
                                    </div>
                                    <div class="jp-interface">
                                        <div class="jp-controls">
                                            <div><a class="jp-previous"><i class="icon-control-rewind i-lg"></i></a></div>
                                            <div>
                                                <a class="jp-play"><i class="icon-control-play i-2x"></i></a>
                                                <a class="jp-pause hid"><i class="icon-control-pause i-2x"></i></a>
                                            </div>
                                            <div><a class="jp-next"><i class="icon-control-forward i-lg"></i></a></div>
                                            <div class="hide"><a class="jp-stop"><i class="fa fa-stop"></i></a></div>
                                            <div><a class="" data-toggle="dropdown" data-target="#playlist"><i class="icon-list"></i></a></div>
                                            <div class="jp-progress hidden-xs">
                                                <div class="jp-seek-bar dk">
                                                    <div class="jp-play-bar bg">
                                                    </div>
                                                    <div class="jp-title text-lt">
                                                        <ul>
                                                            <li></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="hidden-xs hidden-sm jp-current-time text-xs text-muted"></div>
                                            <div class="hidden-xs hidden-sm jp-duration text-xs text-muted"></div>
                                            <div class="hidden-xs hidden-sm">
                                                <a class="jp-mute" title="mute"><i class="icon-volume-2"></i></a>
                                                <a class="jp-unmute hid" title="unmute"><i class="icon-volume-off"></i></a>
                                            </div>
                                            <div class="hidden-xs hidden-sm jp-volume">
                                                <div class="jp-volume-bar dk">
                                                    <div class="jp-volume-bar-value lter"></div>
                                                </div>
                                            </div>
                                            <div>
                                                <a class="jp-shuffle" title="shuffle"><i class="icon-shuffle text-muted"></i></a>
                                                <a class="jp-shuffle-off hid" title="shuffle off"><i class="icon-shuffle text-lt"></i></a>
                                            </div>
                                            <div>
                                                <a class="jp-repeat" title="repeat"><i class="icon-loop text-muted"></i></a>
                                                <a class="jp-repeat-off hid" title="repeat off"><i class="icon-loop text-lt"></i></a>
                                            </div>
                                            <div class="hide">
                                                <a class="jp-full-screen" title="full screen"><i class="fa fa-expand"></i></a>
                                                <a class="jp-restore-screen" title="restore screen"><i class="fa fa-compress text-lt"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="jp-playlist dropup" id="playlist">
                                    <ul class="dropdown-menu aside-xl dker">
                                        <!-- The method Playlist.displayPlaylist() uses this unordered list -->
                                        <li class="list-group-item"></li>
                                    </ul>
                                </div>
                                <div class="jp-no-solution hide">
                                    <span>Update Required</span>
                                    To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
                                </div>
                            </div>
                        </div>
                    </footer>
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
<script src="js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
<script src="js/app.plugin.js"></script>
<script type="text/javascript" src="js/custom/populateBeatList.js"></script>
<script type="text/javascript" src="js/custom/searchInPage.js"></script>
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