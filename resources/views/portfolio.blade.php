@extends('layouts/default')

{{-- Page title --}}
@section('title')
Portfolio
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/portfolio.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/fancybox/css/jquery.fancybox.css') }}"
      media="screen"/>
<!-- Add Button helper (this is optional) -->
<link rel="stylesheet" type="text/css"
      href="{{ asset('assets/vendors/fancybox/css/jquery.fancybox-buttons.css') }}"/>
<!-- Add Thumbnail helper (this is optional) -->
<link rel="stylesheet" type="text/css"
      href="{{ asset('assets/vendors/fancybox/css/jquery.fancybox-thumbs.css') }}"/>
    <!--end of page level css-->
@stop

{{-- breadcrumb --}}
@section('top')
    <div class="breadcum">
        <div class="container">
            <div class="row">
                <div class="col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                    </a>
                </li>
                <li class="d-none d-sm-block">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Portfolio</a>
                </li>
            </ol>
            <div class="float-right breadcrum_adjust">
                <i class="livicon icon3" data-name="briefcase" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Portfolio
            </div>
        </div>
    </div>
        </div>
    </div>
    @stop


{{-- Page content --}}
@section('content')
    <!-- Container Section Start -->
    <div class="container my-3">
        <h2 id="portfolio_title">Portfolio</h2>
        <!-- Images Section Start -->
        <div class="row">
            <div class="col-md-12">
            <div id="gallery">
                <div id="portfolio_btns">
                    <button class=" btn filter btn-primary" data-filter="all">ALL</button>
                    <button class="btn filter btn-primary" data-filter=".category-1">HTML</button>
                    <button class=" btn filter btn-primary" data-filter=".category-2">BOOTSTRAP</button>
                </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="mix category-1" data-my-order="1">
                                <div class="col-md-3 col-sm-6 col-6">
                                    <a class="fancybox" href="{{ asset('assets/images/gallery/10.jpg') }}"><i class="fa fa-search-plus"></i></a>
                                    <a href="{{ URL::to('portfolioitem') }}"><i class="fa fa-link"></i></a>
                                </div>
                                <div class="thumb_zoom">
                                    <img src="{{ asset('assets/images/gallery/10.jpg') }}" class="img-fluid"> 
                                </div>
                            </div>
                    <div class="mix category-1" data-my-order="2">
                        <div class="col-md-3 col-sm-6 col-6">
                            <a class="fancybox" href="{{ asset('assets/images/gallery/8.jpg') }}"><i class="fa fa-search-plus"></i></a>
                            <a href="{{ URL::to('portfolioitem') }}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="{{ asset('assets/images/gallery/8.jpg') }}" class="img-fluid"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="3">
                        <div class="col-md-3 col-sm-6 col-6">
                            <a class="fancybox" href="{{ asset('assets/images/gallery/7.jpg') }}"><i class="fa fa-search-plus"></i></a>
                            <a href="{{ URL::to('portfolioitem') }}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="{{ asset('assets/images/gallery/7.jpg') }}" class="img-fluid"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="4">
                        <div class="col-md-3 col-sm-6 col-6">
                            <a class="fancybox" href="{{ asset('assets/images/16.jpg') }}"><i class="fa fa-search-plus"></i></a>
                            <a href="{{ URL::to('portfolioitem') }}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="{{ asset('assets/images/16.jpg') }}" class="img-fluid"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="5">
                        <div class="col-md-3 col-sm-6 col-6">
                            <a class="fancybox" href="{{ asset('assets/images/gallery/5.jpg') }}"><i class="fa fa-search-plus"></i></a>
                            <a href="{{ URL::to('portfolioitem') }}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="{{ asset('assets/images/gallery/5.jpg') }}" class="img-fluid"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="6">
                        <div class="col-md-3 col-sm-6 col-6">
                            <a class="fancybox" href="{{ asset('assets/images/gallery/4.jpg') }}"><i class="fa fa-search-plus"></i></a>
                            <a href="{{ URL::to('portfolioitem') }}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="{{ asset('assets/images/gallery/4.jpg') }}" class="img-fluid"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="7">
                        <div class="col-md-3 col-sm-6 col-6">
                            <a class="fancybox" href="{{ asset('assets/images/gallery/3.jpg') }}"><i class="fa fa-search-plus"></i></a>
                            <a href="{{ URL::to('portfolioitem') }}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="{{ asset('assets/images/gallery/3.jpg') }}" class="img-fluid"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <a class="fancybox" href="{{ asset('assets/images/gallery/2.jpg') }}"><i class="fa fa-search-plus"></i></a>
                            <a href="{{ URL::to('portfolioitem') }}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="{{ asset('assets/images/gallery/2.jpg') }}" class="img-fluid"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-6">
                            <a class="fancybox" href="{{ asset('assets/images/gallery/1.jpg') }}"><i class="fa fa-search-plus"></i></a>
                            <a href="{{ URL::to('portfolioitem') }}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="{{ asset('assets/images/gallery/1.jpg') }}" class="img-fluid"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-6">
                            <a class="fancybox" href="{{ asset('assets/images/gallery/11.jpg') }}"><i class="fa fa-search-plus"></i></a>
                            <a href="{{ URL::to('portfolioitem') }}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="{{ asset('assets/images/gallery/11.jpg') }}" class="img-fluid"> </div>
                    </div>
                    <div class="mix category-1" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-6">
                            <a class="fancybox" href="{{ asset('assets/images/gallery/12.jpg') }}"><i class="fa fa-search-plus"></i></a>
                            <a href="{{ URL::to('portfolioitem') }}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="{{ asset('assets/images/gallery/12.jpg') }}" class="img-fluid"> </div>
                    </div>
                    <div class="mix category-2" data-my-order="8">
                        <div class="col-md-3 col-sm-6 col-6">
                            <a class="fancybox" href="{{ asset('assets/images/gallery/9.jpg') }}"><i class="fa fa-search-plus"></i></a>
                            <a href="{{ URL::to('portfolioitem') }}"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="thumb_zoom"><img src="{{ asset('assets/images/gallery/9.jpg') }}" class="img-fluid"> </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <!-- //Images Section End -->
    <!-- Container Section End -->
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- page level js starts-->
    <script type="text/javascript" src="{{ asset('assets/vendors/mixitup/mixitup.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/portfolio.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.mixitup.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('assets/vendors/fancybox/js/jquery.mousewheel.pack.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('assets/vendors/fancybox/js/jquery.fancybox.pack.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('assets/vendors/fancybox/js/jquery.fancybox-buttons.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('assets/vendors/fancybox/js/jquery.fancybox-thumbs.js') }}"></script>
<!-- Add Media helper (this is optional) -->
<script type="text/javascript"
        src="{{ asset('assets/vendors/fancybox/js/jquery.fancybox-media.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/pages/gallery.js') }}"></script>

    <!--page level js ends-->

@stop
