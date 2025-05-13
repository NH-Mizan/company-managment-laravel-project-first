
@extends('frontEnd.layouts.master')
@section('content')
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
      <!-- Why-choose section start -->
      <section class="why-chooes-section">
        <div class="container">
            <div class="row">
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
          
            </div>
        </div>
    </section>
@endsection

  