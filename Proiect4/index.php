<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>My project</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/simple-sidebar.css" rel="stylesheet">
        <link href="css/fixed-bar.css" rel="stylesheet">

    </head>

    <body style="background-color: rgba(255, 255, 255, 0.98);">
        <div id="fb-root"></div>
        <script>
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>

        <div id="wrapper">

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <svg height="1300" width="5000">
                        <defs>
                        <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
                        <stop offset="0%"
                              style="stop-color:rgb(255,255,0);stop-opacity:1" />
                        <stop offset="100%"
                              style="stop-color:rgb(177,0,0);stop-opacity:1" />
                        </linearGradient>
                        </defs>
                        <ellipse cx="91" cy="45" rx="80" ry="25" fill="url(#grad1)" style="stroke:#F37042" />
                        <text fill="#F7E7CE" font-size="20" font-family="Verdana"
                              x="35" y="52">My project</text>
                    </li>
                    <li>
                        <a href="http://localhost/Proiect4/index.php">Home</a>
                    </li>
                    <?php
                    if (isset($_SESSION['user_name'])) {
                        echo'<li><a href="http://localhost/Proiect4/logout.php">Logout</a></li>';
                    } else {
                        echo'<li><a href="http://localhost/Proiect4/login.php">Login</a></li>';
                    }
                    ?>
                    <li>
                        <a href="contact_page.php">Contact</a>
                    </li>
                    <li><BR><BR><BR><BR></li>
                    <li>
                        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="box_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->
            <!-- Fixed bar -->
            <div class="navbar">
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a>
                <p align="right">
                    <?php
                    if (isset($_SESSION['user_name']))
                        echo 'Welcome, ' . $_SESSION['user_name'] . '!';
                    ?>
                </p>
            </div>
            <div class="main">
                <!-- Page Content -->
                <div id="page-content-wrapper">
                    <div class="container-fluid">
                        <?php
                        require 'clasaAfisare.php';
                        $afisare = new clasaAfisare();
                        $afisare->afisare();
                        ?>
                    </div>
                </div>
                <!-- /#page-content-wrapper -->
            </div>
        </div>
        <!-- /#wrapper -->

        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Menu Toggle Script -->
        <script>
            $("#menu-toggle").click(function (e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>

    </body>

</html>
