<?php
session_start();
//Gets client content presentation configurations.
include_once ("includes/contentConfig.php");
$hostname = $_SERVER['HTTP_HOST'];

 function kh_getUserIP() {
    $client = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote = $_SERVER['REMOTE_ADDR'];

    if (filter_var($client, FILTER_VALIDATE_IP)) {
        $ip = $client;
    } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
        $ip = $forward;
    } else {
        $ip = $remote;
    }
    return $ip;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <!--link href="Login/css/bootstrap.min.css" rel="stylesheet">
        <!- Font Awesome CSS -->
        <link rel="stylesheet" href="fonts2/font-awesome.min.css" type="text/css" media="screen">
        <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
        <link href="Login/css/material.min.css" rel="stylesheet">
        <link href="Login/css/ripples.min.css" rel="stylesheet">
        <link href="Login/css/main.css" rel="stylesheet">
        <link href="Login/css/responsive.css" rel="stylesheet">
        <link href="Login/css/animate.min.css" rel="stylesheet">
        <link href="Login/assets/css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="Login/assets/css/ionicons.min.css" rel="stylesheet">
        <link href="Login/assets/css/style.css" rel="stylesheet">
    
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="Login/assets/js/ie10-viewport-bug-workaround.js"></script>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="Login/assets/img/favicon.ico">
        <link rel="stylesheet" href="Login/css/style.css">
        <title>&trade;<?php echo $title; ?></title>

        <!-- Bootstrap core CSS -->


<style type="text/css">
    #h{text-align: left;}
    .loginlogo_box{position: relative; top: 40px; -webkit-animation: swing 3s infinite linear;}
    .loginbox{background-color: rgba(10, 43, 62, 0.8); width: 100%; margin: 0px auto; padding: 15px; border-radius: 6px;}
    .logintitle{color: #fff; text-transform: uppercase; text-align: center; font-weight: lighter;}
    .loginlbl{color: #fff;}
    .loginformcontrol{color: #fff; background-color: transparent; border-bottom: 2px solid #fff !important; border-radius: 0px; border: none;
    transition: none;}
    .loginformcontrol:focus {color: #fff; background-color: transparent; border-color: transparent; outline: 0; box-shadow: none;}
    .login_checkcontrol{position: relative; top: 1px; min-height: 0px !important;}
    .login_button{margin: 0px 0px 0px 87%; -webkit-animation: jackInTheBox 3s infinite linear;}
    .login_button:hover{-webkit-animation: paused;}

    .swapbtn img:last-child{display:none}
    .swapbtn:hover img:first-child{display:none}
    .swapbtn:hover img:last-child{display:inline-block}
    .field-group {
                margin-top:15px;
            }
</style>
</head>

    <body>

        <div id="h">
            
            <div class="container">
                <div class="row">
                     <div class="col-md-8 centered ">
                        <div class="box-align">
                       
                            <a href="https://tubelightcommunications.com/" target="_blank"><p align="center"><img src="Login/assets/img/tb-logo.png" /></p></a> 
                            <br/>
                            <h1>SMART & FAST MESSAGING PLATFORM <br></h1>
                            <h2 style="color:#1d3a48;">Simple, Effective and Affordable!</h2>
                            <img src="Login/assets/img/header_people.jpg" class="img-responsive" alt="image" />
                       
                        </div>
                    </div>
            <form id="frm_login"  name="frmLogin"  method="post" autocomplete="off" role="form">
                    <div class="col-md-4">
                        <div class="loginlogo_box">
                            <p align="center"><img src="<?php //echo $logo; ?>" /></p>
                        </div>
                        <div class="loginbox">
                            <h2 class="logintitle">Login</h2>

                            <div class="form-group">
                                <label class="loginlbl">Username</label>
                                <input type="text" class="form-control loginformcontrol" name="txtUsername" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>" />
                            </div>

                            <div class="form-group">
                                <label class="loginlbl">Password</label>
                                <input type="password" class="form-control loginformcontrol" name="txtPassword" value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>" />
                            </div>

                        
                            <div class="login_button">
                                <button class="swapbtn" name="submit" onclick="return isValidLogin();">
                                    <img src="Login/assets/img/login_button.png" alt="login button" />
                                    <img src="Login/assets/img/login_button_hover.png" alt="login button" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <?php
                    if (isset($_POST['submit'])) {
                        include_once('includes/checkLogin.php');
                        $username = $_POST['txtUsername'];
                        $password = $_POST['txtPassword'];
                        checkLogin($username, $password);
                    }
                    ?>
            </form>
                </div><!--/row-->


            </div><!--/container-->
        </div><!-- /H -->

    
        <script src="Login/js/jquery-2.1.4.min.js"></script>
        <script src="Login/js/index.js"></script>
        <script src="Login/js/bootstrap.min.js"></script>
        <script src="Login/js/ripples.min.js"></script>
        <script src="Login/js/material.min.js"></script>
        <script src="Login/js/wow.js"></script>
        <script src="Login/js/jquery.mmenu.min.all.js"></script>
        <script src="Login/js/count-to.js"></script>
        <script src="Login/js/jquery.inview.min.js"></script>
        <script src="Login/js/classie.js"></script>
        <script src="Login/js/jquery.nav.js"></script>
        <script src="Login/js/smooth-on-scroll.js"></script>
        <script src="Login/js/smooth-scroll.js"></script>
        <!--script src="js/main.js"></script-->

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="Login/assets/js/jquery.min.js"></script>
        <script src="Login/assets/js/bootstrap.min.js"></script>
        <script src="Login/assets/js/retina-1.1.0.js"></script>
    </body>
</html>
