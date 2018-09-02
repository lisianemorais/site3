@extends('layouts/default')

{{-- Page title --}}
@section('title')
Blank
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
                <li>
                    <a href="{{ route('home') }}"> <i class="livicon icon3 icon4" data-name="home" data-size="18" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Dashboard
                    </a>
                </li>
                <li class="d-none d-sm-block">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Aposentadorias</a>
                </li>
            </ol>
            <div class="float-right breadcrum_adjust">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Aposentadorias
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
        <!--Content Section Start -->
        <h2 id="portfolio_title">Aposentadorias</h2>
        <!-- Images Section Start -->
        <div class="row">
            <div class="col-md-12">
                <div id="gallery">
                    <div id="questions_btns">
                        <button class=" btn filter btn-primary" data-filter="all">ALL</button>
                        <button class="btn filter btn-primary" data-filter=".category-1">Especial</button>
                        <button class=" btn filter btn-primary" data-filter=".category-2">Invalidez</button>
                        <button class=" btn filter btn-primary" data-filter=".category-3">Rural</button>
                        <button class=" btn filter btn-primary" data-filter=".category-4">Idade</button>
                        <button class=" btn filter btn-primary" data-filter=".category-5">Tempo de Contribuição</button>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="mix category-1 text-center" data-my-order="1">
                                <div class="" style="padding-top: 30px">
                                    <img src="{{ asset('assets/images/foto-para-ilustrar-pessoa-avaliando-valor-da-aposentadoria-1-99x96.png') }}" class="img-fluid"> 
                                </div>
                                 <div class="caption">
                                     <b>Quero me aposentar</b>
                                        <br />
                                    <p class="text-center"> Mas não sei o que fazer</p>
                                    <div class="divide">
                                        <a href="forms/faq" class="divider">
                                            <i class="livicon" data-name="hand-right" data-size="22" data-loop="true" data-c="#3a5795"
                                               data-hc="#3a5795"></i>Saiba Mais
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="mix category-2 text-center" data-my-order="2">
                                <div class="" style="padding-top: 30px">
                                    <img src="{{ asset('assets/images/foto-para-ilustrar-segurado-com-auxílio-negado-98x96.png') }}" class="img-fluid"> 
                                </div>
                                 <div class="caption">
                                     <b>Quero me aposentar</b>
                                        <br />
                                    <p class="text-center"> Mas não sei o que fazer</p>
                                    <div class="divide">
                                        <a href="faq" class="divider">
                                            <i class="livicon" data-name="hand-right" data-size="22" data-loop="true" data-c="#3a5795"
                                               data-hc="#3a5795"></i>Saiba Mais
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="mix category-3 text-center" data-my-order="1">
                                <div class="" style="padding-top: 30px">
                                    <img src="{{ asset('assets/images/foto-para-ilustrar-segurado-que-deseja-se-aposentar.png') }}" class="img-fluid"> 
                                </div>
                                 <div class="caption">
                                     <b>Quero me aposentar</b>
                                        <br />
                                    <p class="text-center"> Mas não sei o que fazer</p>
                                    <div class="divide">
                                        <a href="faq" class="divider">
                                            <i class="livicon" data-name="hand-right" data-size="22" data-loop="true" data-c="#3a5795"
                                               data-hc="#3a5795"></i>Saiba Mais
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="mix category-3 text-center" data-my-order="1">
                                <div class="" style="padding-top: 30px">
                                    <img src="{{ asset('assets/images/foto-para-ilustrar-segurado-com-auxílio-negado-98x96.png') }}" class="img-fluid"> 
                                </div>
                                 <div class="caption">
                                     <b>Quero me aposentar</b>
                                        <br />
                                    <p class="text-center"> Mas não sei o que fazer</p>
                                    <div class="divide">
                                        <a href="faq" class="divider">
                                            <i class="livicon" data-name="hand-right" data-size="22" data-loop="true" data-c="#3a5795"
                                               data-hc="#3a5795"></i>Saiba Mais
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="mix category-2 text-center" data-my-order="1">
                                <div class="" style="padding-top: 30px">
                                    <img src="{{ asset('assets/images/foto-para-ilustrar-pessoa-avaliando-valor-da-aposentadoria-1-99x96.png') }}" class="img-fluid"> 
                                </div>
                                 <div class="caption">
                                     <b>Quero me aposentar</b>
                                        <br />
                                    <p class="text-center"> Mas não sei o que fazer</p>
                                    <div class="divide">
                                        <a href="faq" class="divider">
                                            <i class="livicon" data-name="hand-right" data-size="22" data-loop="true" data-c="#3a5795"
                                               data-hc="#3a5795"></i>Saiba Mais
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="mix category-1 text-center" data-my-order="1">
                                <div class="" style="padding-top: 30px">
                                    <img src="{{ asset('assets/images/foto-para-ilustrar-segurado-que-deseja-se-aposentar.png') }}" class="img-fluid"> 
                                </div>
                                 <div class="caption">
                                     <b>Quero me aposentar</b>
                                        <br />
                                    <p class="text-center"> Mas não sei o que fazer</p>
                                    <div class="divide">
                                        <a href="faq" class="divider">
                                            <i class="livicon" data-name="hand-right" data-size="22" data-loop="true" data-c="#3a5795"
                                               data-hc="#3a5795"></i>Saiba Mais
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- //Images Section End -->
        </div>

        <!-- //Content Section End -->
    </div>
    
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
    
    <script type="text/javascript" src="{{ asset('assets/js/frontend/index.js') }}"></script>

    <!--page level js ends-->
@stop
