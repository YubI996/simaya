<?php 

    include_once("./assts/fctn/serv-conf.php");

    //check auth
    if (isset($_SESSION["userauth_token-key"]) AND $_SESSION["userauth_token-key"] == md5(KEY)) {
        header("location: " . "./dashboard/");
    } 

?>

<script src='https://www.google.com/recaptcha/api.js' async defer></script>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Simayabatik - Rumah Layanan Bantuan Politik</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="./assts/css/animate.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="./assts/css/login/bootstrap.min.css">
    <!-- Font Awesome CSS
        ============================================ -->
    <link rel="stylesheet" href="./assts/css/font-awesome.min.css">
    <!-- notifications CSS
        ============================================ -->
    <link rel="stylesheet" href="./assts/css/notifications/Lobibox.min.css">
    <link rel="stylesheet" href="./assts/css/notifications/notifications.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="./assts/css/main.css">
    <!-- Custom CSS-->
    <link rel="stylesheet" href="./style.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="./assts/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- set base url
        ============================================ -->
    <base href="">
</head>

<body class="bg-full-screen-image">

    <div class="color-line"></div>
    <div class="app-content content">
    <div class="content-wrapper">
    <div class="container-fluid">
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-8 col-12 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
                            <div class="card-header border-0">
                                <div class="card-title text-center">
                                    <img src="./assets/img/head-logo.png" alt="">
                                </div>
                                <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Login Your Account</span></h6>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <form class="form-horizontal form-simple" id="fm-usr" >
                                        <fieldset class="form-group position-relative has-icon-left mb-1">
                                            <input type="text" class="form-control form-control-lg" id="user-name" name="usr-nm" placeholder="User Name" required />
                                            <div class="form-control-position">
                                                <i class="fa fa-user"></i>
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input type="password" class="form-control form-control-lg" id="user-password" name="usr-pss" placeholder="Enter Password" required />
                                            <div class="form-control-position">
                                                <i class="fa fa-key"></i>
                                            </div>
                                        </fieldset>
                                    </form>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" id="fm-usr" name="mm-login" onclick="login($(this))" ><i class="fa fa-unlock-alt"></i> Login</button>
                                </div>
                                <p class="text-center">Don't have an account ? <a href="./register.php" class="card-link">Sign Up</a></p>
                                <p class="text-center"><a href="./" type="button" class="mr-1 mb-1 btn btn-outline-light btn-min-width btn-sm"><i class="fa fa-home"></i> Back</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    </div>

    <!-- jquery
        ============================================ -->
    <script src="./assts/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="./assts/js/bootstrap.min.js"></script>
    <!-- notification JS
        ============================================ -->
    <script src="./assts/js/notifications/Lobibox.js"></script>
    <!-- Ajax and Custom JS
        ============================================ -->
    <script type="text/javascript">
        $(document).ready(function() {

            addNotif = function (data) {
                if ( data == 'green' ) {
                    window.location.href = './dashboard/';
                } else if ( data == 'nF' ) {
                    Lobibox.notify('warning', {
                        sound: false,
                        msg: 'Username belum terdaftar'
                    });
                } else if ( data == 'iP' ) {
                    Lobibox.notify('warning', {
                        sound: false,
                        msg: 'Password yang dimasukkan salah'
                    });
                } else if ( data == 'captchaE' ) {
                	Lobibox.notify('warning', {
                        sound: false,
                        msg: 'Captcha Error'
                    });
                } else {
                    var text = data;
                    Lobibox.notify('error', {
                        sound: false,
                        msg: text
                    });
                }
            }

            formNotif = function (data) {
                Lobibox.notify('error', {
                    sound: false,
                    showClass: 'bounceIn',
                    hideClass: 'bounceOut',
                    msg: 'Field tidak boleh kosong'
                });
            }

            //Add proposal function
            login = function (this_) {
                var form = this_.attr('id');
                var formAttr = document.getElementById(form);

                var serializeData = {};

                $(formAttr).find("input[name]").each(function (index, node) {
                    serializeData[node.name] = node.value;
                });

                var usr = serializeData['usr-nm'];
                var pss = serializeData['usr-pss'];
                // var cap = serializeData[];

                if (usr == "" || pss == "") {
                    formNotif();
                } else {
                    $.ajax({
                        type: 'POST',
                        url: './assts/fctn/mm-fctn.php',
                        data: {
                            'mm-login' : 1,
                            'data' : serializeData
                        },
                        success: function(data){
                            addNotif(data);
                        },
                        error: function(err){
                            addNotif(err);
                        } 
                    });
                }
            }
        });
    </script>

</body>
</html>