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
                        Our FAQs                    </li>
                </ul>
                <h2 class="wow fadeInUp" data-wow-delay=".3s">Our FAQs</h2>
            </div>
        </div>
    </div>
</section>

<div style="width: 100%; height: 100px;"></div>
@include("components.faq")

@endsection
