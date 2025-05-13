
@extends('frontEnd.layouts.master')
@section('content')
    <!-- banner section Start -->
    <div class="main-slider-section">
        <div class="main-slider owl-carousel owl-theme">
            <div class="item"><img src="{{asset('frontend')}}/images/HT LT Cover.jpg " alt="Slide 1"></div>
            <div class="item"><img src="{{asset('frontend')}}/images/LT PFI Cover.jpg " alt="Slide 1"></div>
            <div class="item"><img src="{{asset('frontend')}}/images/PFI66.jpg" alt="Slide 1"></div>
            <div class="item"><img src="{{asset('frontend')}}/images/Radiator.jpg" alt="Slide 1"></div>
            <div class="item"><img src="{{asset('frontend')}}/images/T-2.jpg" alt="Slide 54"></div>
            <div class="item"><img src="{{asset('frontend')}}/images/Solar panel Cover.jpg" alt="Slide 1"></div>
            <div class="item"><img src="{{asset('frontend')}}/images/T-1.jpg" alt="Slide 1"></div>
        </div>
    </div>
    <!-- banner section end -->
    <!-- About mission section start  -->
    <section class="about-mission-scetion">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="about-mission-title">
                        <h2>Company Profile</h2>
                    </div>
                    <div class="about-mission-info">
                        <p>One of the most reputed and trusted names in the field of electro-mechanical solutions since
                            1986, SATCO is a well-known group enterprise specializing in the multi-Co-operation of the
                            manufacture, import, marketing, erection and maintenance of different kinds of submersible,
                            centrifugal pumps & electrical installations including all sorts of electrically and diesel
                            driven pumps</p>
                        <span class="">SATCO’S Concerns are:</span>
                        <p>S A Traders & Co. - Importer and distributor of all sorts of pumps including Submersible &
                            centrifugal pumps, Generators, various electrical control panel, PFI plant components and
                            electro - mechanical items. S.A.Traders & Co has vast experience in the pump section with
                            international standard pump testing bed and workshop.
                            SATCO Electrical Industries Ltd. - Professional manufacturer and specialized in producing
                            various electrical Sub- station, control equipment, PFI plants of various capacities and
                            related services.</p>
                        <p>Establish...</p>

                        <div class="button">
                            <button>Read More</button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="about-mission-img">
                        <img src="{{asset('frontend')}}/images/1701691851-factory.jfif" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About mission section end  -->
    <!-- Products section start -->
    <section class="product-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="product-top">
                        <div class="title">
                            <h2>Our <span>Products</span></h2>
                        </div>
                        <div class="product-btn-top">
                            <button>All Products</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="product-card">
                        <a href="">
                            <img src="{{asset('frontend')}}/images/Power Transformer.jpg" alt="">
                            <p>Power Transformer</p>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-card">
                        <a href="">
                            <img src="{{asset('frontend')}}/images/Distribution Transformer.jfif" alt="">
                            <p>Distribution Transformer</p>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-card">
                        <a href="">
                            <img src="{{asset('frontend')}}/images/HT-removebg-preview-removebg-preview.png" alt="">
                            <p>HT Switchgear</p>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-card">
                        <a href="">
                            <img src="{{asset('frontend')}}/images/LT.jpg" alt="">
                            <p>LT Switchgear</p>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-card">
                        <a href="">
                            <img src="{{asset('frontend')}}/images/PFI.png" alt="">
                            <p>PFI Plant</p>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-card">
                        <a href="">
                            <img src="{{asset('frontend')}}/images/Submersible Pump-Motor.png" alt="">
                            <p>Submersible Pump-Motor</p>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-card">
                        <a href="">
                            <img src="{{asset('frontend')}}/images/Starter-removebg-preview.png" alt="">
                            <p>Pump starter: DOL &amp; Star-Delta</p>
                        </a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-card">
                        <a href="">
                            <img src="{{asset('frontend')}}/images/Ekran-Resmi-2021-06-08-07.54.03-1.png" alt="">
                            <p>Capacitor</p>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Products section End -->
    <!-- Our Services Section Start -->
    <section class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="product-top">
                        <div class="title">
                            <h2>Our <span>Serviecs</span></h2>
                        </div>
                        <div class="product-btn-top">
                            <button>All Serviecs</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="services-inner">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="product-card">
                            <a href="">
                                <img src="{{asset('frontend')}}/images/Power Transformer.jpg" alt="">
                                <p>Power Transformer</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-card">
                            <a href="">
                                <img src="{{asset('frontend')}}/images/Distribution Transformer.jfif" alt="">
                                <p>Distribution Transformer</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-card">
                            <a href="">
                                <img src="{{asset('frontend')}}/images/HT-removebg-preview-removebg-preview.png" alt="">
                                <p>HT Switchgear</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-card">
                            <a href="">
                                <img src="{{asset('frontend')}}/images/LT.jpg" alt="">
                                <p>LT Switchgear</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-card">
                            <a href="">
                                <img src="{{asset('frontend')}}/images/PFI.png" alt="">
                                <p>PFI Plant</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-card">
                            <a href="">
                                <img src="{{asset('frontend')}}/images/Submersible Pump-Motor.png" alt="">
                                <p>Submersible Pump-Motor</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-card">
                            <a href="">
                                <img src="{{asset('frontend')}}/images/Starter-removebg-preview.png" alt="">
                                <p>Pump starter: DOL &amp; Star-Delta</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-card">
                            <a href="">
                                <img src="{{asset('frontend')}}/images/Ekran-Resmi-2021-06-08-07.54.03-1.png" alt="">
                                <p>Capacitor</p>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="overly"></div>
    </section>


    <!-- Our Services Section End -->

    <!-- Why-choose section start -->
    <section class="why-chooes-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="why-chooes">
                        <div class="title">
                            <h2>why <span> Choose Us</span></h2>
                        </div>
                        <p>👉 We listen to our clients objectives and aspirations and therefore provide customize
                            solutions.</p>
                        <p>👉 We listen to our clients objectives and aspirations and therefore provide customize
                            solutions.</p>
                        <p>👉 Extraordinary and High Quality services: We have a supreme team who works rigorously to
                            grown businesses beyond client’s expectations.</p>
                        <p>👉 We always deliver on time: We genuinely understand the value of time in business and hence
                            adhere to time and deliver all projects on time to our customers.</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="chooes-slider-section">
                        <div class="chooes-slider">
                            <div class="title">
                                <h2 class="text-center text-white">projects</h2>
                            </div>
                            <div class="banner-slider owl-carousel owl-theme">
                                <div class="item"><img src="{{asset('frontend')}}/images/HT LT Cover.jpg " alt="Slide 1">
                                    <p>3000 KVA 33/11KV Substation</p>
                                    <p>Vintage, Denim, Gazipur</p>
                                </div>
                                <div class="item"><img src="{{asset('frontend')}}/images/LT PFI Cover.jpg " alt="Slide 1">
                                    <p>33/11KV, 11/0.4 KV Substation</p>
                                    <p>Maksuda Spinning Mills, Narsingdi.</p>
                                </div>
                                <div class="item"><img src="{{asset('frontend')}}/images/PFI66.jpg" alt="Slide 1">
                                    <p>33/11KV Substation&nbsp;at Narsingdi</p>
                                </div>
                                <div class="item"><img src="{{asset('frontend')}}/images/Radiator.jpg" alt="Slide 1">
                                    <p>33/11KV, 11/0.4 KV Substation</p>
                                    <p>at Narayanganj.</p>
                                </div>
                                <div class="item"><img src="{{asset('frontend')}}/images/T-2.jpg" alt="Slide 54">
                                    <p>Substation</p>
                                    <p>at Narsingdi.<br></p>
                                </div>
                                <div class="item"><img src="{{asset('frontend')}}/images/Solar panel Cover.jpg" alt="Slide 1">
                                    <p>630 KVA Substation Commissioned Sucessfully</p>
                                    <p>at Sonargaon</p>
                                </div>
                                <div class="item"><img src="{{asset('frontend')}}/images/T-1.jpg" alt="Slide 1">
                                    <p>3600 W Off/On Grid Solar Panel installed </p>
                                    <p>at our factory, Narayanganj.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why-choose section End -->
    <!-- Blog section Start -->
    <section class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="blog-title">
                        <div class="product-top">
                            <div class="title">
                                <h2>News <span> & Events</span></h2>
                            </div>
                            <div class="product-btn-top">
                                <button>See More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="blog-card-item">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="blog-card">
                                    <div class="blog-img"> <img src="{{asset('frontend')}}/images/1.jpg" class="card-img-top" alt="..."></div>
                                    <div class="blog-info ">
                                        <div class="date">
                                            <p>16n JAN</p>
                                        </div>
                                        <div class="post-name">
                                            <p><i class="fa fa-user"></i> Posted By Admin</p>
                                        </div>
                                    </div>
                                    <div class="blog-details">
                                        <h2><a href="">Inspection of BSTI Engineer 2023.</a></h2>
                                        <p>Inspection of PWD Team 2023 in Our Factory, Narayanganj.</p>
                                        <button>Explore More <i class="fa fa-angle-double-right"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="blog-card">
                                    <div class="blog-img"> <img src="{{asset('frontend')}}/images/2.jpg" class="card-img-top" alt="..."></div>
                                    <div class="blog-info ">
                                        <div class="date">
                                            <p>16n JAN</p>
                                        </div>
                                        <div class="post-name">
                                            <p><i class="fa fa-user"></i> Posted By Admin</p>
                                        </div>
                                    </div>
                                    <div class="blog-details">
                                        <h2><a href="">Inspection of BSTI Engineer 2023.</a></h2>
                                        <p>Inspection of PWD Team 2023 in Our Factory, Narayanganj.</p>
                                        <button>Explore More <i class="fa fa-angle-double-right"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="blog-card">
                                    <div class="blog-img"> <img src="{{asset('frontend')}}/images/9.jpg" class="card-img-top" alt="..."></div>
                                    <div class="blog-info ">
                                        <div class="date">
                                            <p>16n JAN</p>
                                        </div>
                                        <div class="post-name">
                                            <p><i class="fa fa-user"></i> Posted By Admin</p>
                                        </div>
                                    </div>
                                    <div class="blog-details">
                                        <h2><a href="">Inspection of BSTI Engineer 2023.</a></h2>
                                        <p>Inspection of PWD Team 2023 in Our Factory, Narayanganj.</p>
                                        <button>Explore More <i class="fa fa-angle-double-right"></i></button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog section End -->
    @endsection
