@extends('layouts/default')

{{-- Page title --}}
@section('title')
About us
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <!-- /home/lisiane/Proj/testes/Laravel 5.6 fresh/laravel56/public/assets/css/frontend/aboutus.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/aboutus.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/animate/animate.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl_carousel/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl_carousel/css/owl.theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/devicon/devicon.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/devicon/devicon-colors.css') }}">
    <!--end of page level css-->
@stop

{{-- breadcrumb --}}
@section('top')
    <div class="breadcum">
        <div class="container">
            <div class="row">
                <div class="col-12">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                    </a>
                </li>
                <li class="d-none d-sm-block">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Empresa</a>
                </li>
            </ol>
            <div class="float-right breadcrum_adjust">
                <i class="livicon icon3" data-name="users" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Empresa
            </div>
        </div>
    </div>

        </div>
    </div>
    @stop


{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container">
        <!-- Slider Section Start -->
        <div class="row my-3">
            <!-- Left Heading Section Start -->
            <div class="col-md-7 col-sm-12  col-md-12 col-lg-8 wow bounceInLeft" data-wow-duration="5s">
                <h2><label>Sobre nós</label></h2>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti atque, tenetur quam aspernatur corporis at explicabo nulla dolore necessitatibus doloremque exercitationem
                </p>
            </div>
            <!-- //Left Heaing Section End -->
            <!-- Slider Start -->
            <div class="col-md-12 col-sm-12  col-lg-4 slider wow fadeInRightBig" data-wow-duration="5s">
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <div class="item"><img src="{{ asset('assets/images/image_16.jpg') }}" alt="slider-image" class="img-fluid">
                    </div>
                    <div class="item"><img src="{{ asset('assets/images/image_17.jpg') }}" alt="slider-image" class="img-fluid">
                    </div>
                    <div class="item"><img src="{{ asset('assets/images/image_16.jpg') }}" alt="slider-image" class="img-fluid">
                    </div>
                </div>
            </div>
            <!-- //Slider End -->
        </div>
        <!-- //Slider Section End -->
        <!-- Services Section Start -->
        <div class="text-center">
            <h3 class="border-success"><span class="heading_border bg-success" >Nossos Valores</span></h3>
        </div>
        <div class="row">
            <section id="valores" class="section-center">
                <div class="row">
                <div class="col-sm-8 col-md-4">
                    <img src="{{ asset('assets/images/quem-somos/quem-somos_02.jpg') }}" alt="">
                    <h2>Missão</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing. Ut enim ad minim, nostrud exercitation ullamco laboris nisi ut aliquip ex commodo.</p>
                </div>
                <div class="col-sm-8 col-md-4">
                    <img src="{{ asset('assets/images/quem-somos/quem-somos_03.jpg') }}" alt="">
                    <h2>Visão</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing. Ut enim ad minim, nostrud exercitation ullamco laboris nisi ut aliquip ex commodo.</p>
                </div>
                <div class="col-sm-8 col-md-4">
                    <img src="{{ asset('assets/images/quem-somos/quem-somos_04.jpg') }}" alt="">
                    <h2>Valores</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing. Ut enim ad minim, nostrud exercitation ullamco laboris nisi ut aliquip ex commodo.</p>
                </div>
              </div>
            </section>
        </div>        
    </div>
    
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    <script type="text/javascript" src="{{ asset('assets/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/wow/js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/aboutus.js') }}"></script>
    <!--page level js ends-->
@stop
