<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>satcobd </title>
    <link rel="shortcut icon" href="{{asset('frontend')}}/images/correct.png" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/all.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/meanmenu.css">



</head>

<body>


    <!-- Header Section Start -->
    <section>
        <div class="header-inner container ">
            <div class="row">
                <div class="col-sm-9">
                    <div class="social-info">
                        <ul>
                            <li><a href="tel:01753887635" class=""><i class="fa-solid fa-phone "></i>
                                    <span>01753887635</span></a></li>
                            <li> <a href="mailto:satcobd@gmail.com" class=""><i class="fa-solid fa-envelope"></i>
                                    <span>satcobd@gmail.com</span></a></li>
                            <li><a href="#" class=""><i class="fa-regular fa-clock"></i> <span>Saturday to Thursday,
                                        8:00am-6:00pm</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class=" social-icon ">
                        <ul>
                            <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Header Section End -->


    <!-- Menu Section Start -->
    <!-- mobile menu  -->
    <nav class="mobile-menu">

    
        <ul>
            
            <li><a href="#">Home</a></li>
            <li class="">
                <a href="#">About Company </a>
                <ul class="">
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="#">Mission & Vision</a></li>
                    <li><a href="#">Managing Director Message</a></li>
                    <li><a href="#">Our Major Clients</a></li>
                    <li><a href="#">Our Certificates</a></li>
                </ul>
            </li>
            <li class="">
                <a href="#">Our Products</a>
                <ul class="">
                    <li><a href="#">Transformer</a></li>
                    <li><a href="#">LT Switchgear</a></li>
                    <li><a href="#">HT Switchgear</a></li>
                    <li><a href="#">Submersible Pump &amp; Motor</a></li>
                    <li><a href="#">PFI Plant</a></li>
                    <li><a href="#">Starter</a></li>
                    <li><a href="#">Capacitor</a></li>
                    <li><a href="#">DB Board</a></li>
                    <li><a href="#">Harmonic Reactor</a></li>
                    <li><a href="#">PFC Relay</a></li>
                    <li><a href="#">Solar Panel</a></li>
                    <li><a href="#">Transformer Radiator</a></li>
                    <li><a href="#">Accessories</a></li>

                </ul>
            </li>


            <li><a href="#">Our Services</a></li>

            <li >
                <a href="#">Gallery </a>
                <ul class="">
                    <li><a href="#">Photo Gallery</a></li>
                    <li><a href="#">Video Gallery</a></li>
                </ul>
            </li>

            <li><a href="#">News & Events</a></li>
            <li class=""><a href="#">Contact Us</a></li>
        </ul>
      </nav>



    <!-- mobile menu end -->
    <section class="bg-primary desktop-menu"
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-sm-3">
                    <div class="logo-area">
                        <a href="#">
                            <img src="{{asset('frontend')}}/images/8.png" alt="Satco Logo" style="height: 60px;">
                        </a>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="main-nav">
                        <ul class="menu ">
                            <li><a href="#">Home</a></li>

                            <li class="dropdown">
                                <a href="#">About Company <i class="fa fa-caret-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="{{route('about')}}">About Us</a></li>
                                    <li><a href="#">Mission & Vision</a></li>
                                    <li><a href="#">Managing Director Message</a></li>
                                    <li><a href="#">Our Major Clients</a></li>
                                    <li><a href="#">Our Certificates</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">Our Products <i class="fa fa-caret-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="#">Transformer</a></li>
                                    <li><a href="#">LT Switchgear</a></li>
                                    <li><a href="#">HT Switchgear</a></li>
                                    <li><a href="#">Submersible Pump &amp; Motor</a></li>
                                    <li><a href="#">PFI Plant</a></li>
                                    <li><a href="#">Starter</a></li>
                                    <li><a href="#">Capacitor</a></li>
                                    <li><a href="#">DB Board</a></li>
                                    <li><a href="#">Harmonic Reactor</a></li>
                                    <li><a href="#">PFC Relay</a></li>
                                    <li><a href="#">Solar Panel</a></li>
                                    <li><a href="#">Transformer Radiator</a></li>
                                    <li><a href="#">Accessories</a></li>

                                </ul>
                            </li>


                            <li><a href="#">Our Services</a></li>

                            <li class="dropdown">
                                <a href="#">Gallery <i class="fa fa-caret-down"></i></a>
                                <ul class="submenu">
                                    <li><a href="#">Photo Gallery</a></li>
                                    <li><a href="#">Video Gallery</a></li>
                                </ul>
                            </li>

                            <li><a href="#">News & Events</a></li>
                            <li class="bg-info p-3 "><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Menu Section End -->
    
    @yield('content')

    <!-- Footer section start -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- Head Office -->
                <div class="col-sm-4">
                    <div class="footer-col">
                        <div><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <h4>Head Office</h4>
                            <p>121, Motijheel C/A, Jibon Bima Bhaban (2nd Floor), Dhaka-1000</p>
                            <p>Tel: +88 02-223388340, 223385492, 223385726, 223385728, 223358099, 223358101</p>
                            <p>Cell: 01753-887635</p>
                            <p>Email: satcobd@gmail.com</p>
                        </div>
                    </div>
                </div>

                <!-- Dhaka Showroom -->
                <div class="col-sm-4">
                    <div class="footer-col">
                        <div><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <h4>Dhaka Showroom</h4>
                            <p>Satco Electric, 110, BCC Road, Noorjahan Electric Market, Nawabpur, Dhaka-1100</p>
                            <p>Cell: 01917-006636</p>
                            <p>Tel: 0088-02-9578239, 0088-02-47116477</p>
                        </div>
                    </div>
                </div>

                <!-- Chattogram Regional Office -->
                <div class="col-sm-4">
                    <div class="footer-col">
                        <div><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <h4>Chattogram Regional Office</h4>
                            <p>Kader Tower (1st & 3rd Floor), 128/2, Jubilee Road, Chattogram-4000</p>
                            <p>Cell: 01839-963516, 01999-912509</p>
                            <p>Email: satcoctg@gmail.com</p>
                        </div>
                    </div>
                </div>

                <!-- Cox's Bazar Office -->
                <div class="col-sm-4">
                    <div class="footer-col">
                        <div><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <h4>Cox's Bazar Office</h4>
                            <p>Hotel Bay Touch, 1st Floor, 2-D, Plot-63, Block-B, Cox's Bazar</p>
                            <p>Cell: 01839-963516</p>
                        </div>
                    </div>
                </div>

                <!-- Factory -->
                <div class="col-sm-4">
                    <div class="footer-col">
                        <div><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <h4>Factory</h4>
                            <p>E/195, Sahebpara, West Mizmizi, Shanarpar, Siddirgonj, Narayongonj</p>
                            <p>Cell: 01999-912526, 01999-912527</p>
                            <p>Email: satcobd.fact@gmail.com</p>
                        </div>
                    </div>
                </div>

                <!-- SAN Commercial Agency -->
                <div class="col-sm-4">
                    <div class="footer-col">
                        <div><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <h4>SAN Commercial Agency</h4>
                            <p>E/195, Sahebpara, West Mizmizi, Shanarpar, Siddirgonj, Narayongonj</p>
                            <p>Cell: 01753-887635, 01999-912507</p>
                            <p>Email: sancommercialagency@gmail.com</p>
                            <p>Phone: +88 02-223388340, 223385492, 223385726</p>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <p>Copyright © 2025 Satcobd Ltd. Developed by
                        <a href="#">Websolution IT</a>
                    </p>
                </div>
            </div>
    </footer>



    <script src="{{asset('frontend')}}/js/jquery-3.7.1.min.js"></script>
    <script src="{{asset('frontend')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('frontend')}}/js/all.min.js"></script>
    <script src="{{asset('frontend')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend')}}/js/script.js"></script>
    <script src="{{asset('frontend')}}/js/jquery.meanmenu.js"></script>
    <script>
        jQuery(document).ready(function () {
            jQuery('nav').meanmenu();

        });
    </script>



</body>

</html>