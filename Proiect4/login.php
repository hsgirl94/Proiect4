<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION['user_name'])) {
    header("Location:index.php");
}
?>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Login</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/simple-sidebar.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/fixed-bar.css" rel="stylesheet">
        <style>
            body {font-family: Arial, Helvetica, sans-serif;}
            form {margin:0 auto;border: 3px solid #f1f1f1;width: 50%;}

            input[type=text], input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            button {
                background-color: #4CAF50;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }

            button:hover {
                opacity: 0.8;
            }

            .cancelbtn {
                width: auto;
                padding: 10px 18px;
                background-color: #f44336;
            }

            .imgcontainer {
                text-align: center;
                margin: 24px 0 12px 0;
            }

            img.avatar {
                width: 40%;
                border-radius: 50%;
            }

            .container {
                padding: 16px;
            }

            span.psw {
                float: right;
                padding-top: 16px;
            }

            /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 300px) {
                span.psw {
                    display: block;
                    float: none;
                }
                .cancelbtn {
                    width: 100%;
                }
            }
        </style>
    </head>

    <body>
        <div id="wrapper">
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
            </div>
            <div class="main">
                <!-- Page Content -->
                <div id="page-content-wrapper">
                    <div class="container-fluid">
                        <form action="action_page.php" method="POST">
                            <div class="container">
                                <label for="uname"><b>Username</b></label>
                                <input type="text" placeholder="Enter Username" name="username" required>

                                <label for="psw"><b>Password</b></label>
                                <input type="password" placeholder="Enter Password" name="password" required>
                                <?php
                                $number1 = rand(1, 9);
                                $number2 = rand(1, 9);
                                $sum = $number1 + $number2;
                                ?>
                                <label for="captchalabel"><b><?php echo$number1 . '+' . $number2; ?></b></label>
                                <input type="text" placeholder="Answer" name="captcha" required>
                                <input type="hidden" name="correctsum" size="50" value="<?php echo $sum; ?>"/>

                                <button type="submit">Login</button>
                                <label>
                                    <input type="checkbox" checked="checked" name="rememberme"> Remember me
                                </label>
                            </div>
                        </form>

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
