<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!--        <meta name="viewport" content="width=device-width,initial-scale=1">-->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
        <meta name="author" content="Arnaud P Crowther">
        <title>VizorTeam | Research System</title>
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700' rel='stylesheet' type='text/css'>
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" type="text/css" href="css/tooltipster.css">
        <link rel="stylesheet" type="text/css" href="css/input.css">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="css/mediasizes.css">
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="src/jquery.tooltipster.js"></script>
        <script src="src/clickout.js"></script>
        <script src="src/init.js"></script>
    </head>
    <body>
        <nav>
            <div class="row top">
                <div class="inner">
                    <div id="btn-logo" class="inline abs-block nohighlight noselect logo">
                        <span class="vt">
                            <span class="logo-text">Research System</span>
                        </span>
                    </div>
                    <div class="inline nohighlight search">
                        <input id="main-search" type="text" placeholder="Search...">
                        <i id="btn-search" class="fa fa-search"></i>
                    </div>
                    <div id="btn-name" class="inline abs-block nohighlight noselect name">
                        <span class="name-text">Arnaud Crowther</span> 
                        <i class="fa fa-bars"></i>
                    </div>
                </div>
            </div>
        </nav>
        <div class="drop-sheet drop-search"></div>
        <div class="drop-sheet drop-name">
            <div class="nohighlight"><i class="fa fa-user"></i>Profile</div>
            <div class="desktop nohighlight" onclick="animateDrawer()"><i class="fa fa-exchange"></i>Menu</div>
            <div class="nohighlight"><i class="fa fa-question-circle"></i>Help</div>
            <div class="nohighlight"><i class="fa fa-sign-out"></i>Sign out</div>
        </div>
        <div class="main-menu noselect">
            <ul id="tabs">
                <li class="current tooltip" title="Dashboard"><a href="#dashboard"><i class="fa fa-tachometer"></i> Dashboard</a></li>
                <li class="tooltip nohighlight" title="Profile"><a href="#profile"><i class="fa fa-user"></i> Profile</a></li>
                <li class="tooltip nohighlight" title="Research"><a href="#research"><i class="fa fa-book"></i> Research</a></li>
                <li class="tooltip nohighlight" title="Agencies"><a href="#agencies"><i class="fa fa-binoculars"></i> Agencies</a></li>
                <li class="tooltip nohighlight" title="Proposals"><a href="#proposals"><i class="fa fa-certificate"></i> Proposals</a></li>
                <li class="tooltip nohighlight" title="Contact"><a href="#contact"><i class="fa fa-envelope"></i> Contact</a></li>
                <li class="tooltip nohighlight" title="Help"><a href="#help"><i class="fa fa-question-circle"></i> Help</a></li>
                <li class="tooltip nohighlight" title="Administrator"><a href="#admin"><i class="fa fa-puzzle-piece"></i> Administrator</a></li>
                <li class="tooltip nohighlight" title="Expand menu">
                    <div class="menu-control collapse">
                        <i class="fa fa-arrow-circle-left"></i> Collapse menu
                    </div>
                    <div class="menu-control expand">
                        <i class="fa fa-arrow-circle-right"></i> Collapse menu
                    </div>
                </li>
            </ul>
            <div onclick="location.href='http://vizorteam.com'" class="footer">&copy; 2014 - VizorTeam</div>
        </div>
        <div class="main-content">
            <div id="content">
                <div class="tabs current" id="dashboard">
                    <?PHP include 'php/dashboard.php'; ?>
                </div>
                <div class="tabs" id="profile">
                    <?PHP include 'php/profile.php'; ?>
                </div>
                <div class="tabs" id="research">
                    <?PHP include 'php/research.php'; ?>
                </div>
                <div class="tabs" id="agencies">
                    <?PHP include 'php/agencies.php'; ?>
                </div>
                <div class="tabs" id="proposals">
                    <?PHP include 'php/proposals.php'; ?>
                </div>
                <div class="tabs" id="contact">
                    <?PHP include 'php/contact.php'; ?>
                </div>
                <div class="tabs" id="help">
                    <?PHP include 'php/help.php'; ?>
                </div>
                <div class="tabs" id="admin">
                    <?PHP include 'php/admin.php'; ?>
                </div>
            </div>
        </div>
        <div id="saving-indicator"><img src="res/spiner.gif"><div class="text">Saving Data...</div></div>
    </body>
</html>