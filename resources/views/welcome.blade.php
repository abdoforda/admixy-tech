@extends('layouts.app')

@section('content')

<!-- Hero Section Start -->
    <section class="hero-section hero-3" style="background-image: url('assets/img/hero/hero-bg-3.png');">
        <div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-9">
            <div class="hero-content">
                <!-- Hero Eyebrow -->

                <!-- Hero Headline -->
                <h1 class="char-animation">Powering Your Business <br> With Smarter Technology</h1>

                <!-- Hero Description -->
                <p class="wow fadeInUp" data-wow-delay=".2s">
                    From advanced MT4 and MT5 trading solutions to CRM, HR, and custom technology systems, Admixy Tech delivers reliable solutions designed to connect your operations, simplify complexity, and support your business growth.
                </p>

                <!-- Support Text -->
                <p class="support-text wow fadeInUp" data-wow-delay=".6s" style="margin-top: 15px; font-size: 14px;">
                    Have a technology challenge? Let’s find the right solution for your business.
                </p>
            </div>
        </div>
    </div>
</div>
    </section>

    <!-- About Section Start -->
<section class="about-section-3 section-padding fix">
    <div class="container">
        <div class="about-wrapper-3">
            <div class="row g-4 align-items-end">
                <!-- Left Image -->
                <div class="col-xl-3 col-lg-6">
                    <div class="about-left-image wow img-custom-anim-left">
                        <img src="{{ asset('assets/img/about/about-3-left-img.png') }}" alt="About Admixy Tech">
                    </div>
                </div>

                <!-- Content Area -->
                <div class="col-xl-6 col-lg-6">
                    <div class="about-content-3">
                        <div class="section-title mb-0">
                            <span class="wow fadeInUp">About Admixy Tech</span>
                            <h2 class="char-animation">Building Smarter Technology <br> for Modern Businesses</h2>
                        </div>
                        <p class="about-text-3 wow fadeInUp" data-wow-delay=".2s">
                            Admixy Tech provides specialized technology solutions designed to simplify operations, connect critical systems, and support business growth. From MT4 and MT5 trading solutions to CRM, HR, and custom technology systems, we build reliable solutions around your business needs.
                        </p>
                        <div class="about-btn wow fadeInUp" data-wow-delay=".4s">
                            <a href="about.html" class="theme-btn">
                                Discover Admixy Tech
                                <i class="far fa-arrow-right"></i>
                            </a>
                        </div>
                        <ul class="list-items wow fadeInUp" data-wow-delay=".6s">
                            <li>
                                <i class="flaticon-check"></i>
                                Scalable technology built to grow with your business
                            </li>
                            <li>
                                <i class="flaticon-check"></i>
                                Integrated solutions that connect your essential systems
                            </li>
                            <li>
                                <i class="flaticon-check"></i>
                                Specialized expertise across trading and business technology
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Right Image -->
                <div class="col-xl-3 col-lg-6">
                    <div class="about-right-image">
                        <img src="{{ asset('assets/img/about/about-3-right-img.png') }}" alt="Admixy Tech Solutions"
                            class="wow img-custom-anim-right">
                        <div class="about-right-image-2 wow img-custom-anim-top">
                            <img src="{{ asset('assets/img/about/about-3-right-img-circle.png') }}" alt="Admixy Tech">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Service Section Start -->
<section class="service-section-3 section-padding section-bg">
    <div class="right-shape">
        <img src="{{ asset('assets/img/service/right-shape.png') }}" alt="shape">
    </div>
    <div class="left-shape">
        <img src="{{ asset('assets/img/service/plane-shape.png') }}" alt="shape">
    </div>
    <div class="container">
        <div class="service-wrapper-3">
            <div class="row g-4">
                <!-- Left Title Column -->
                <div class="col-lg-6">
                    <div class="section-title sticky-style">
                        <span class="wow fadeInUp">Our Services</span>
                        <h2 class="char-animation">Our Technology Can <br> Power Your Trading <br> Business</h2>
                        <p class="wow fadeInUp" data-wow-delay=".2s" style="margin-top: 15px;">
                            At Admixy Tech, we provide advanced technology solutions designed to support modern trading businesses, brokers, and financial platforms with reliable, scalable, and efficient trading infrastructure.
                        </p>
                    </div>
                </div>

                <!-- Right Services Cards Column -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="service-box-items-3">
                        <div class="row g-5">
                            <!-- Service 1: MT4 Solutions -->
                            <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                                <div class="service-right-box">
                                    <div class="icon">
                                        <i class="flaticon-email-marketing"></i>
                                    </div>
                                    <div class="content">
                                        <h3><a href="service-details.html">MT4 Solutions</a></h3>
                                        <p>Empower your trading business with reliable MetaTrader 4 solutions designed for seamless operations, advanced trading capabilities, and a professional user experience.</p>
                                    </div>
                                    <a href="service-details.html" class="link-btn">More Details
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Service 2: MT5 Solutions -->
                            <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                                <div class="service-right-box">
                                    <div class="icon style-2">
                                        <i class="flaticon-seo"></i>
                                    </div>
                                    <div class="content">
                                        <h3><a href="service-details.html">MT5 Solutions</a></h3>
                                        <p>Take your trading infrastructure to the next level with MetaTrader 5 solutions built to support multi-asset trading, advanced functionality, and scalable performance.</p>
                                    </div>
                                    <a href="service-details.html" class="link-btn">More Details
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Service 3: Trading Platform Solutions -->
                            <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                                <div class="service-right-box">
                                    <div class="icon style-3">
                                        <i class="flaticon-email-marketing-1"></i>
                                    </div>
                                    <div class="content">
                                        <h3><a href="service-details.html">Trading Platform Solutions</a></h3>
                                        <p>Build a complete and efficient trading environment with technology solutions tailored to your business needs, from platform integration to essential trading infrastructure.</p>
                                    </div>
                                    <a href="service-details.html" class="link-btn">More Details
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Service 4: FinTech Technology Solutions -->
                            <div class="col-lg-6 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
                                <div class="service-right-box">
                                    <div class="icon style-4">
                                        <i class="flaticon-performance"></i>
                                    </div>
                                    <div class="content">
                                        <h3><a href="service-details.html">FinTech Technology Solutions</a></h3>
                                        <p>Leverage modern financial technology to create smarter, more connected trading experiences.</p>
                                    </div>
                                    <a href="service-details.html" class="link-btn">More Details
                                        <i class="far fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Service Section End -->


    <!-- About Feature Section Start -->
<section class="about-feature-section-3 section-padding bg-cover fix" style="background-image: url('assets/img/feature/01.jpg');">
    <div class="container">
        <!-- Section Header -->
        <div class="section-title text-center">
            <span class="wow fadeInUp">About Our Company</span>
            <h2 class="text-white char-animation">Building Smarter Technology <br> for the Future of Trading</h2>
            <p class="text-white wow fadeInUp" data-wow-delay=".2s">
                Welcome to <strong>Admixy Tech</strong>, your technology partner for reliable and scalable trading solutions.<br>
                We combine modern technology with industry-focused expertise to help businesses build, manage, and enhance powerful trading environments.
            </p>
        </div>

        <!-- Features Wrapper -->
        <div class="about-feature-wrapper-3">
            <div class="row">
                <!-- Feature Box 1 -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="about-feature-box-3 item_right_1">
                        <div class="about-feature-icon">
                            <div class="about-icon">
                                <i class="flaticon-video-marketing-1"></i>
                            </div>
                            <h3>Advanced Trading <br> Technology</h3>
                        </div>
                        <p class="mt-4">
                            We provide robust technology solutions designed to support modern trading businesses with efficient infrastructure, seamless functionality, and a reliable digital experience.
                        </p>
                    </div>
                </div>

                <!-- Feature Box 2 -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="about-feature-box-3">
                        <div class="about-feature-icon">
                            <div class="about-icon style-2">
                                <i class="flaticon-presentation"></i>
                            </div>
                            <h3>MT4 & MT5 <br> Solutions</h3>
                        </div>
                        <p class="mt-4">
                            Our solutions are built around leading trading platforms, helping businesses leverage the capabilities of MetaTrader 4 and MetaTrader 5 for a more connected and flexible trading environment.
                        </p>
                    </div>
                </div>

                <!-- Feature Box 3 -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="about-feature-box-3 item_left_1">
                        <div class="about-feature-icon">
                            <div class="about-icon style-3">
                                <i class="flaticon-pie-chart"></i>
                            </div>
                            <h3>Technology Built <br> for Growth</h3>
                        </div>
                        <p class="mt-4">
                            We focus on scalable solutions that adapt to your business needs, enabling you to build stronger trading operations, improve performance, and stay ready for the evolving financial technology landscape.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Feature Section End -->

   <!-- Working Process Section Start -->
<section class="working-process-section-3 section-padding section-bg-2 fix">
    <div class="container">
        <!-- Section Title -->
        <div class="section-title text-center">
            <span class="wow fadeInUp">Working Process</span>
            <h2 class="char-animation">How We Build the Right Technology <br> for Your Trading Business</h2>
        </div>

        <div class="row">
            <!-- Step 01 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="working-process-box-items-3">
                    <div class="working-icon">
                        <span class="number">
                            01
                        </span>
                        <i class="flaticon-search"></i>
                    </div>
                    <div class="working-content">
                        <h4>Understand</h4>
                        <p>
                            We start by understanding your business model, technical requirements, and trading objectives to identify the right solution for your needs.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Step 02 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="working-process-box-items-3">
                    <div class="working-icon style-2">
                        <span class="number">
                            02
                        </span>
                        <i class="flaticon-custom"></i>
                    </div>
                    <div class="working-content">
                        <h4>Customize</h4>
                        <p>
                            We tailor our technology solutions to match your operational requirements, ensuring the right tools, integrations, and platform capabilities.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Step 03 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                <div class="working-process-box-items-3">
                    <div class="working-icon style-3">
                        <span class="number">
                            03
                        </span>
                        <i class="flaticon-search-results"></i>
                    </div>
                    <div class="working-content">
                        <h4>Integrate</h4>
                        <p>
                            We connect and configure your trading technology for a smooth, reliable environment across your systems and platforms.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Step 04 -->
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
                <div class="working-process-box-items-3">
                    <div class="working-icon style-4">
                        <span class="number">
                            04
                        </span>
                        <i class="flaticon-keyword"></i>
                    </div>
                    <div class="working-content">
                        <h4>Optimize</h4>
                        <p>
                            We continuously focus on performance, stability, and scalability to help your trading infrastructure evolve with your business.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Working Process Section End -->



<div style="height: 120px;">

</div>

<!-- CTA Value Section Start -->
<section class="cta-value-secton-3 fix section-padding pt-0">
    <div class="container">
        <div class="cta-value-wrapper-3 bg-cover" style="background-image: url('assets/img/cta/cta-3-bg.jpg');">
            <div class="row align-items-center">
                <div class="col-xl-6 d-none d-xl-block wow fadeInUp" data-wow-delay=".3s">
                    <div class="cta-image">
                        <img src="{{ asset('assets/img/cta/cta-value.png') }}" alt="img">
                    </div>
                </div>
                <div class="col-xl-6 mt-4 mt-lg-0">
                    <div class="cta-value-content">
                        <div class="section-title mb-0">
                            <span class="text-white wow fadeInUp">Our Value</span>
                            <h2 class="text-white char-animation">Technology That Moves Your Trading Forward</h2>
                        </div>
                        <p class="text wow fadeInUp" data-wow-delay=".2s">
                            At Admixy Tech, we believe the right technology should make trading operations more efficient, reliable, and ready for growth. We deliver practical solutions built around performance, flexibility, and the evolving needs of modern trading businesses.
                        </p>
                        <a href="{{ route('contact') }}" class="theme-btn wow fadeInUp" data-wow-delay=".4s">
                            Get Started
                            <i class="far fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Value Section End -->

    @include("components.faq")
    @include("components.contact")


@endsection
