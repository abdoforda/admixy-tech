@extends('layouts.app')

@section('content')


    <!-- Breadcrumb-section Start -->
    <section class="breadcrumb-section fix bg-cover" style="background-image: url(assets/img/breadcrumb.jpg);">
    <div class="container">
        <div class="row">
            <div class="page-heading">
                <ul class="breadcrumb-list wow fadeInUp" data-wow-delay=".5s">
                    <li>
                        <a href="index-2.html">Home</a>
                    </li>
                    <li>
                        <i class="fal fa-long-arrow-right"></i>
                    </li>
                    <li>
                        Contact Us                    </li>
                </ul>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">Contact Us</h2>
            </div>
        </div>
    </div>
</section>
<div style="width: 100%; height: 100px;"></div>

@include("components.contact")

<!-- Cta Call Section Start -->
    <section class="cta-call-section-5 section-padding bg-cover"
        style="background-image: url('assets/img/cta-call.jpg');">
        <div class="container">
            <div class="cta-call-wrapper style-padding">
                <div class="section-title text-center mb-0">
                    <span class="text-white wow fadeInUp">No Time to Wait? Let’s Talk</span>
                    <h2 class="text-white wow fadeInUp" data-wow-delay=".2s">
                        Let’s Build Your Trading <br> Technology Together
                    </h2>
                    <p class="text-white wow fadeInUp" data-wow-delay=".4s" style="max-width: 650px; margin: 15px auto 0; opacity: 0.9;">
                        Ready to strengthen your trading infrastructure? Connect with Admixy Tech and discover technology solutions designed around your business needs, from MT4 and MT5 to advanced trading technology and integrations.
                    </p>
                </div>
                <div class="cta-button wow fadeInUp" data-wow-delay=".6s">
                    <a href="contact.html" class="theme-btn">
                        Request a Demo
                        <i class="far fa-arrow-right"></i>
                    </a>
                    <a href="contact.html" class="pricing-text">Contact Us <i class="far fa-arrow-right"></i></a>
                </div>
                <div class="carton-shape float-bob-x">
                    <img src="assets/img/cta/carton.png" alt="img">
                </div>
                <div class="book-shape float-bob-y">
                    <img src="assets/img/cta/book-shape.png" alt="img">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Info Section Start -->
    <div class="contact-info-inner">
        <div class="container">
            <div class="contact-info-inner-wrapper">
                <div class="icon-items wow fadeInUp" data-wow-delay=".3s">
                    <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="content">
                        <h3>Dubai, United Arab Emirates</h3>
                        <p>Business Centre, Sharjah Publishing City Free Zone, Sharjah, United Arab Emirates</p>
                    </div>
                </div>
                <div class="icon-items wow fadeInUp" data-wow-delay=".5s">
                    <div class="icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <div class="content">
                        <h3>Call Us</h3>
                        <p><a href="tel:+447878695637">+44 7878 695637</a></p>
                    </div>
                </div>
                <div class="icon-items wow fadeInUp" data-wow-delay=".7s">
                    <div class="icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="content">
                        <h3>Email Us</h3>
                        <p><a href="mailto:caree@admixy.tech" class="link">caree@admixy.tech</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
