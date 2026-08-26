@extends('layouts.app')


@section('content')
    <section class="breadcrumb-section fix bg-cover" style="background-image: url(assets/img/breadcrumb.jpg);">
    <div class="container">
        <div class="row">
            <div class="page-heading">
                <ul class="breadcrumb-list wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li>
                        <i class="fal fa-long-arrow-right"></i>
                    </li>
                    <li>
                        About Admixy Tech
                    </li>
                </ul>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">About Admixy Tech</h2>
            </div>
        </div>
    </div>
</section>

    <!-- About Section Start -->
    <section class="about-section-2 section-padding fix">
        <div class="plane-shape">
            <img src="assets/img/about/plane-shape.png" alt="img">
        </div>
        <div class="container">
            <div class="about-wrapper-2 m-0">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="about-img">
                            <img src="{{ asset('assets/img/about/about-2-01.png') }}" alt="Admixy Tech technology solutions">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title mb-0 text-start">
                                <span class="wow fadeInUp">About Admixy Tech</span>
                                <h2 class="char-animation">Building Smarter Technology <br>for Modern Businesses</h2>
                            </div>
                            <p class="about-text wow fadeInUp" data-wow-delay=".2s">
                                Admixy Tech provides specialized technology solutions designed to simplify operations,
                                connect critical systems, and support business growth. From advanced MT4 and MT5 trading
                                solutions to CRM, HR, and custom technology systems, we build reliable solutions around
                                your business needs.
                            </p>
                            <div class="icon-box wow fadeInUp" data-wow-delay=".6s">
                                <div class="icon">
                                    <i class="flaticon-research"></i>
                                </div>
                                <div class="content">
                                    <h3>Technology Built for Growth</h3>
                                    <p>Scalable technology that adapts to your business and helps your operations evolve with confidence.</p>
                                </div>
                            </div>
                            <div class="icon-box wow fadeInUp" data-wow-delay=".8s">
                                <div class="icon style-2">
                                    <i class="flaticon-online-service"></i>
                                </div>
                                <div class="content">
                                    <h3>Connected Business Solutions</h3>
                                    <p>Integrated systems that bring your trading, CRM, HR, and essential business operations together.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-feature-wrapper-1 section-padding pb-0">
                <div class="about-feature-box wow fadeInUp" data-wow-delay=".3s">
                    <div class="about-icon">
                        <i class="flaticon-video-marketing-1"></i>
                    </div>
                    <div class="about-content">
                        <h3>Advanced Trading Technology</h3>
                        <p>Reliable infrastructure and efficient functionality for modern trading businesses and financial platforms.</p>
                    </div>
                </div>
                <div class="about-feature-box wow fadeInUp" data-wow-delay=".5s">
                    <div class="about-icon style-2">
                        <i class="flaticon-market-analysis"></i>
                    </div>
                    <div class="about-content">
                        <h3>MT4 &amp; MT5 Solutions</h3>
                        <p>Flexible solutions built around MetaTrader 4 and MetaTrader 5 for a more connected trading environment.</p>
                    </div>
                </div>
                <div class="about-feature-box wow fadeInUp" data-wow-delay=".7s">
                    <div class="about-icon style-3">
                        <i class="flaticon-presentation"></i>
                    </div>
                    <div class="about-content">
                        <h3>Reliable Technology Partner</h3>
                        <p>Practical, scalable systems designed to improve performance and support your long-term business growth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div style="width: 100%; height: 100px;"></div>
@include("components.faq")
@endsection
