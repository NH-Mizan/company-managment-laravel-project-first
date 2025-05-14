@extends('frontEnd.layouts.master')
@section('content')


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
                                <img src="{{asset('public/frontend')}}/images/Power Transformer.jpg" alt="">
                                <p>Power Transformer</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-card">
                            <a href="">
                                <img src="{{asset('public/frontend')}}/images/Distribution Transformer.jfif" alt="">
                                <p>Distribution Transformer</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-card">
                            <a href="">
                                <img src="{{asset('public/frontend')}}/images/HT-removebg-preview-removebg-preview.png" alt="">
                                <p>HT Switchgear</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-card">
                            <a href="">
                                <img src="{{asset('public/frontend')}}/images/LT.jpg" alt="">
                                <p>LT Switchgear</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-card">
                            <a href="">
                                <img src="{{asset('public/frontend')}}/images/PFI.png" alt="">
                                <p>PFI Plant</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-card">
                            <a href="">
                                <img src="{{asset('public/frontend')}}/images/Submersible Pump-Motor.png" alt="">
                                <p>Submersible Pump-Motor</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-card">
                            <a href="">
                                <img src="{{asset('public/frontend')}}/images/Starter-removebg-preview.png" alt="">
                                <p>Pump starter: DOL &amp; Star-Delta</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-card">
                            <a href="">
                                <img src="{{asset('public/frontend')}}/images/Ekran-Resmi-2021-06-08-07.54.03-1.png" alt="">
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




@endsection