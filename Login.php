<?php
    
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CVG</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body class="body1">
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <div class="search-icon search-switch">
            <i class="icon_search"></i>
        </div>
        <div class="header-configure-area">
            <div class="language-option">
                <img src="img/flag.jpg" alt="">
                <span>EN <i class="fa fa-angle-down"></i></span>
                <div class="flag-dropdown">
                    <ul>
                        <li><a href="#">Zi</a></li>
                        <li><a href="#">Fr</a></li>
                    </ul>
                </div>
            </div>
            <a href="#" class="bk-btn">Booking Now</a>
        </div>
        <nav class="mainmenu mobile-menu">
            <ul>
                <li><a href="./index.html">Home</a></li>
                <li><a href="./rooms.html">Rooms</a></li>
                <li><a href="./about-us.html">About Us</a></li>
                <li><a href="./blog.html">News</a></li>
                <li><a href="./contact.html">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="https://www.facebook.com/profile.php?id=100093367804749"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/ceylonvoyagersretreat/"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
            <li><i class="fa fa-phone"></i>(+94) 77 752 1857</li>
            <li><i class="fa fa-envelope"></i>info@ceylonvoyagersretreat.com</li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section header-normal">
        <div class="top-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tn-left">
                            <li><i class="fa fa-phone"></i>(+94) 77 752 1857</li>
                            <li><i class="fa fa-envelope"></i>info@ceylonvoyagersretreat.com</li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tn-right">
                            <div class="top-social">
                                <a href="https://www.facebook.com/profile.php?id=100093367804749"><i
                                        class="fa fa-facebook"></i></a>
                                <a href="https://www.instagram.com/ceylonvoyagersretreat/"><i
                                        class="fa fa-instagram"></i></a>
                            </div>
                            <a href="#" class="bk-btn">Booking Now</a>
                            <div class="language-option">
                                <img src="img/flag.jpg" alt="">
                                <span>EN <i class="fa fa-angle-down"></i></span>
                                <div class="flag-dropdown">
                                    <ul>
                                        <li><a href="#">Zi</a></li>
                                        <li><a href="#">Fr</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li><a href="./index.html">Home</a></li>
                                    <li><a href="./rooms.html">Rooms</a></li>
                                    <li><a href="./about-us.html">About Us</a></li>
                                    <li><a href="./blog.html">News</a></li>
                                    <li><a href="./contact.html">Contact</a></li>
                                </ul>
                            </nav>
                            <div class="nav-right search-switch">
                                <i class="icon_search"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <body>
        <style>
            /*---------------------
            Login
          -----------------------*/
            * {
                margin: 0;
                padding: 0;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
            }

            section {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                width: 100%;
            }

            .form-box {
                position: relative;
                width: 500px;
                height: 400px;
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 50px;
                border: 2px solid white;
            }

            h1 {
                color: rgb(255, 255, 255);
                font-size: 2em;
                text-align: center;
                text-shadow: 0 0 20px rgba(255, 217, 0, 0.6);
                font-style: italic;
            }

            .inputbox {
                position: relative;
                margin: 30px 0;
                width: 310px;
                border-bottom: 2px solid white;
            }

            .inputbox label {
                position: absolute;
                top: 50%;
                left: 5px;
                transform: translateY(-50%);
                color: rgb(255, 255, 255);
                font-size: 1em;
                pointer-events: none;
                transition: .2s;
            }

            input:focus~label,
            input:focus~ :valid {
                top: -5px;

            }

            .inputbox input {
                width: 100%;
                height: 50px;
                background: transparent;
                border: 0;
                outline: 0;
                font-size: 1em;
                padding: 0 35px 0 5px;
                color: white;
            }

            .inputbox ion-icon {
                position: absolute;
                right: 8px;
                color: rgb(255, 255, 255);
                font-size: 1.2em;
                top: 20px;
            }

            .forget {
                margin: -15px 0 15px;
                font-size: .9em;
                color: white;
                display: flex;
                justify-content: center;
                margin-left: 50px;
            }

            .forget label input {
                margin-right: 3px;
            }

            .forget label a {
                color: white;
                text-decoration: 0;
            }

            .forget label a:hover {
                text-decoration: underline;
            }

            button {
                cursor: pointer;
                border: 0;
                border-radius: 4px;
                font-weight: 600;
                margin: 0 0px;
                width: 100px;
                padding: 10px 0;
                box-shadow: 0 0 20px rgba(104, 85, 224, 0.2);
                transition: 0.4s;
                margin-left: 35%;
                
            }


            .log {
                color: rgb(0, 0, 0);
                background-color: rgb(238, 255, 0);
                border: 1px solid rgba(0, 184, 9, 0.788);
            }

            button:hover {
                color: white;
                width: ;
                box-shadow: 0 0 20px rgba(255, 0, 0, 0.6);
                background-color: rgb(255, 0, 0);
            }
            .log{
                text-align: center;
            }
            .empw{
                margin:auto;
                display: absolute;
                justify-content: center;
                margin-left: 0px;
            }
            .bg-img{
                background-image: url(./img/hero/hero-1.webp);
                width: 100%;
                height: 100%;
            }
            label{
                opacity: 75%;
            }



        </style>
        <body>
            <section class="bg-img">   
                <div>
                <div class="form-box">
                    <div class="form-value">
                        <form action="login.php" method="get">
                            <h1 class="loginh2">ADMIN LOGIN</h1>
                        <div class="empw">
                            <div class="inputbox">
                                <ion-icon name="mail-outline"></ion-icon>
                                <input type="email" required name="username">
                                <label for="">Email</label>
                            </div>
                            <div class="inputbox">
                                <ion-icon name="lock-closed-outline"></ion-icon>
                                <input type="password" required name="password">
                                <label for="">Password</label>
                            </div>
                        </div>  
                                <button class="log">Login</button>   
                            </div>
                        </form>
                        <div class="form-box1"></div>
                    </div>
                
            </section>  
            </body>
        </body>
    </body>











































    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ft-about">
                            <div class="logo">
                                <a href="#">
                                    <img src="img/footer-logo.png" alt="">
                                </a>
                            </div>
                            <p>We inspire and reach millions of travelers<br /> across 90 local websites</p>
                            <div class="fa-social">
                                <a href="https://www.facebook.com/profile.php?id=100093367804749"><i
                                        class="fa fa-facebook"></i></a>
                                <a href="https://www.instagram.com/ceylonvoyagersretreat/"><i
                                        class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-contact">
                            <h6>Contact Us</h6>
                            <ul>
                                <li>(+94) 77 752 1857</li>
                                <li>info@ceylonvoyagersretreat.com</li>
                                <li>50B, 20 Aches state, Mirigama,<br>Sri Lanka.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="ft-newslatter">
                            <h6>New latest</h6>
                            <p>Get the latest updates and offers.</p>
                            <form action="#" class="fn-form">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-option">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <ul>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Environmental Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <div class="co-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>document.write(new Date().getFullYear());</script> All rights reserved | This
                                template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href=""
                                    target="_blank">INFI</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>