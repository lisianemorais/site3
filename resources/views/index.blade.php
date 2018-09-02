@extends('layouts/default')

{{-- Page title --}}
@section('title')
Home
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css starts-->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/tabbular.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/animate/animate.min.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/jquery.circliful.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl_carousel/css/owl.carousel.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/owl_carousel/css/owl.theme.css') }}">

<style>
    .box{
        margin-top:53px !important;
    }

</style>

<!--end of page level css-->
@stop

{{-- slider --}}
@section('top')
<!--Carousel Start -->
<div id="owl-demo" class="owl-carousel owl-theme">
    <div class="item img-fluid"><img src="{{ asset('assets/images/slide_1.jpg') }}" alt="slider-image"/>
    </div>
    <div class="item img-fluid"><img src="{{ asset('assets/images/slide_2.jpg') }}" alt="slider-image">
    </div>
    <div class="item img-fluid"><img src="{{ asset('assets/images/slide_4.png') }}" alt="slider-image">
    </div>
</div>
<!-- //Carousel End -->
@stop

{{-- content --}}
@section('content')
<div class="container">
    <!-- Service Section Start-->
    <div class="row">
        <!-- Responsive Section Start -->
        <div class="col-12 text-center my-3">
            <h3 class="border-primary"><span class="heading_border bg-primary mx-auto">Áreas de Atuação</span></h3></div>
        <div class="col-sm-6 col-md-6 col-lg-3 wow bounceInLeft" data-wow-duration="3.5s">
            <div class="box">
                <div class="box-icon">
                    <i class="livicon icon" data-name="balance" data-size="55" data-loop="true" data-c="#01bc8c"
                       data-hc="#01bc8c"></i>
                </div>
                <div class="info">
                    <h3 class="success text-center">Direito Previdenciário</h3>
                    <p>Regimes geral e próprios (fases administrativa e judicial).</p>
                    <div class="text-right primary"><a href="#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Responsive Section End -->
        <!-- Easy to Use Section Start -->
        <div class="col-sm-6 col-md-6  col-lg-3 col-12 wow bounceInDown" data-wow-duration="3s" data-wow-delay="0.4s">
            <!-- Box Start -->
            <div class="box">
                <div class="box-icon box-icon1">
                    <i class="livicon icon1" data-name="wrench" data-size="55" data-loop="true" data-c="#418bca"
                       data-hc="#418bca"></i>
                </div>
                <div class="info">
                    <h3 class="primary text-center">Direito do Trabalho</h3>
                    <p>Ações em geral e ações envolvendo acidente do trabalho.</p>
                    <div class="text-right primary"><a href="#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Easy to Use Section End -->
        <!-- Clean Design Section Start -->
        <div class="col-sm-6 col-md-6  col-lg-3 col-12 wow bounceInUp" data-wow-duration="3s" data-wow-delay="0.8s">
            <div class="box">
                <div class="box-icon box-icon2">
                    <i class="livicon icon1" data-name="legal" data-size="55" data-loop="true" data-c="#f89a14"
                       data-hc="#f89a14"></i>
                </div>
                <div class="info">
                    <h3 class="warning text-center">Direito Cível</h3>
                    <p>Com ênfase em direito de família e sucessões.</p>
                    <div class="text-right primary"><a href="#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- //Clean Design Section End -->
        <!-- 20+ Page Section Start -->
        <div class="col-sm-6 col-md-6 col-lg-3 col-12  wow bounceInRight" data-wow-duration="5s" data-wow-delay="1.2s">
            <div class="box">
                <div class="box-icon box-icon3">
                    <i class="livicon icon1" data-name="folder-open" data-size="55" data-loop="true" data-c="#FFD43C"
                       data-hc="#FFD43C"></i>
                </div>
                <div class="info">
                    <h3 class="yellow text-center">Cobranças Extrajudiciais</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    <div class="text-right primary"><a href="#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- //20+ Page Section End -->
    </div>
    <!-- //Services Section End -->
</div>
<!-- Layout Section Start -->
<div class="container">
        <div class="text-center">
            <!-- <h3 class="border-warning""><span class="heading_border bg-warning">Diferenciais</span></h3> -->
            <h3 class="border-success""><span class="heading_border bg-success">Diferenciais</span></h3>
        </div>
    </div>
<section class="feature-main">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-9 col-xs-12 wow zoomIn" data-wow-duration="2s">
                <div class="difference-image">
                    <img src="{{ asset('assets/images/diferenciais.jpg') }}" alt="layout" class="img-fluid"/>
                </div>
            </div>
            <div class="col-md-7 col-sm-3 col-xs-12 wow lightSpeedIn" data-wow-duration="2s">
                <ul class="list-unstyled  text-right layout-styl">
                    <li>
                        <i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c"
                           data-hc="#01bc8c"></i> Atendimento ágil e personalizado
                    </li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c"
                           data-hc="#01bc8c"></i> Interação e modernidade
                    </li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c"
                           data-hc="#01bc8c"></i> Qualificação dos profissionais
                    </li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c"
                           data-hc="#01bc8c"></i> Resultados
                    </li>
                    <li><i class="livicon" data-name="checked-on" data-size="20" data-loop="true" data-c="#01bc8c"
                           data-hc="#01bc8c"></i> Infraestrutura
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- //Layout Section Start -->

<!-- Our Team Start -->
<div class="container">
    <div class="row text-center">
        <div class="col-12 my-3">
            <h3 class=" border-danger"><span class="heading_border bg-danger">Perguntas Frequentes</span></h3></div>
    </div>
    <div class="row text-center">
        <div class="col-md-6 col-sm-6 col-12 col-lg-3 profile wow fadeInLeft" data-wow-duration="3s"
             data-wow-delay="0.5s">
            <div class="thumbnail bg-white">
                <img src="{{ asset('assets/images/foto-para-ilustrar-segurado-que-deseja-se-aposentar.png') }}" alt="team-image" class="img-fluid">
                <div class="caption">
                     <b>Quero me aposentar</b>
                        <br />
                    <p class="text-center"> Mas não sei o que fazer</p>
                    <div class="divide">
                        <a href="faq#question1" class="divider">
                            <i class="livicon" data-name="hand-right" data-size="22" data-loop="true" data-c="#3a5795"
                               data-hc="#3a5795"></i>Saiba Mais
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-3 col-12 profile wow fadeInUp" data-wow-duration="3s"
             data-wow-delay="0.5s">
            <div class="thumbnail bg-white">
                <img src="{{ asset('assets/images/foto-para-ilustrar-segurado-com-auxílio-negado-98x96.png') }}" alt="team-image">
                <div class="caption">
                   <b>Meu auxílio foi negado</b>
                        <br />
                    <p class="text-center"> O que faço agora? </p>
                    <div class="divide">
                        <a href="#" class="divider">
                            <i class="livicon" data-name="hand-right" data-size="22" data-loop="true" data-c="#3a5795"
                               data-hc="#3a5795"></i>Saiba Mais
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-3 col-12 profile wow fadeInDown" data-wow-duration="3s"
             data-wow-delay="0.5s">
            <div class="thumbnail bg-white">
                <img src="{{ asset('assets/images/foto-para-ilustrar-pessoa-avaliando-valor-da-aposentadoria-1-99x96.png') }}" alt="team-image" class="img-fluid">
                <div class="caption">
                    <b>Minha aposentadoria está muito baixa!</b>
                    <p class="text-center"> Tem algo que eu possa fazer? </p>
                    <div class="divide">
                        <a href="#" class="divider">
                            <i class="livicon" data-name="hand-right" data-size="22" data-loop="true" data-c="#3a5795"
                               data-hc="#3a5795"></i>Saiba Mais
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-3 col-12 profile wow fadeInRight" data-wow-duration="3s"
             data-wow-delay="0.5s">
            <div class="thumbnail bg-white">
                <img src="{{ asset('assets/images/foto-para-ilustrar-segurado-com-auxílio-negado-98x96.png') }}" alt="team-image">
                <div class="caption">
                    <b>Sam Bellows</b>
                    <p class="text-center"> Manager </p>
                    <div class="divide">
                        <a href="#" class="divider">
                            <i class="livicon" data-name="hand-right" data-size="22" data-loop="true" data-c="#3a5795"
                               data-hc="#3a5795"></i>Saiba Mais
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Our Team End -->

<!-- //Container End -->
@stop
{{-- footer scripts --}}
@section('footer_scripts')
<!-- page level js starts-->
<script type="text/javascript" src="{{ asset('assets/js/frontend/jquery.circliful.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendors/wow/js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/vendors/owl_carousel/js/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/frontend/carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/frontend/index.js') }}"></script>
<!--page level js ends-->
@stop


