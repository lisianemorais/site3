@extends('layouts/default')

{{-- Page title --}}
@section('title')
Previdenciário
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/previdencia.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/portfolio.css') }}"> -->
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
                            <a href="#">Previdenciário</a>
                        </li>
                    </ol>
                    <div class="float-right breadcrum_adjust">
                        <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Previdenciário
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

{{-- Page content --}}
@section('content')
    <section class="container-fluid banner"  id="banner-background" data-editable="true" data-content="background" >
        <div class="banner--cover"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12"></div>
            </div>
            <div class="row banner--title--wrapper">
                <div class="col-xs-12 col-sm-7 col-md-7">
                    <h1 id="banner-title" class="banner--title" data-editable="true">
                        <span style="font-size: 36px; line-height: 100%; color: #fff;">
                            <span style="display: inline-block; line-height: 100%;">
                                Consulte a situação da sua Aposentadoria Especial com um de nossos especialistas!
                            </span>
                            <br>
                            <br>
                            <span style="color: #fffb00;"> Preencha o formulario ao lado!</span>

                        </span>
                    </h1>
                </div>
            </div>
        </div>
        <div class="image-container"> 
            <div class="section-background-image">
                
            </div>
        </div>
    </section>
    <section id="content-background" class="container-fluid section" data-editable="true" data-content="background">
        <!-- Container Section Start -->
        <div class="container my-3">
            <!--Content Section Start -->
            <h2 id="portfolio_title">Previdenciário</h2>

            <div class="row">
                <!-- Images Section Start -->
                <div class="col-xs-12 col-sm-7 col-md-8">
                    <div id="gallery">
                        <div id="questions_btns">
                           <!--  <button class=" btn filter btn-primary" data-filter="all">Todos</button>
                            <button class="btn filter btn-primary" data-filter=".category-1">Aposentadorias</button>
                            <button class=" btn filter btn-primary" data-filter=".category-2">Pensões</button>
                            <button class=" btn filter btn-primary" data-filter=".category-3">Benefícios</button> -->
                            <a href="#aposentadoria"><button class="btn btn-primary">Aposentadorias</button></a>
                            <a href="#pensoes"><button class=" btn btn-primary">Pensões</button></a>
                            <a href="#beneficios"><button class=" btn btn-primary">Benefícios</button></a>
                        </div>
                        <section id="aposentadoria">
                            <div class="col-12 text-center my-3">
                                <h3 class="border-primary"><span class="heading_border bg-primary mx-auto">Aposentadorias</span></h3>
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
                                    <!-- others -->
                                </div>
                        </section>
                        <section id="pensoes">
                            <div class="col-12 text-center my-3">
                                <h3 class="border-primary"><span class="heading_border bg-primary mx-auto">Pensões</span></h3>
                            </div>
                            <div class="row">
                                <div class="mix category-3 text-center" data-my-order="1">
                                    <div class="" style="padding-top: 30px">
                                        <img src="{{ asset('assets/images/foto-para-ilustrar-segurado-que-deseja-se-aposentar.png') }}" class="img-fluid"> 
                                    </div>
                                    <div class="caption">
                                        <b>Quero me aposentar</b>
                                        <br/>
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
                                            <br/>
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
                        </section>
                        <section id="beneficios">
                            <div class="col-12 text-center my-3">
                                <h3 class="border-primary"><span class="heading_border bg-primary mx-auto">Benefícios</span></h3>
                            </div>
                            <div class="row">
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
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="banner--form">
                        <div id="conversion" class="right" data-editable="true" data-content="conversion" data-editor-position="inside">
                            <header>
                                <h2 id="form-title">
                                    Sim, quero falar com um especialista.
                                </h2>
                                <p id="form-subtitle" style="text-align: center">
                                     Preencha os seus dados abaixo. 
                                     <br>
                                     Juntos,vamos planejar o seu futuro!
                                </p>
                            </header>
                            <section >
                                <form id="conversion-form" class="form-contact-aposentadoria" action="{{route('contact-aposentadoria')}}" method="POST">
                                 <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                <br>
                                    <div class="form-group">
                                        <input type="text" name="contact-name" class="form-control input-lg" placeholder="Nome" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="contact-email" class="form-control input-lg" placeholder="E-mail" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" name="contact-telefone" class="form-control input-lg" placeholder="Telefone" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="feminino"> Feminino
                                            <input type="radio" name="contact-sexo" id="feminino" class="form-control input-lg">
                                        </label>
                                        <label for="masculino"> Masculino
                                            <input type="radio" name="contact-sexo" id="masculino" class="form-control input-lg">
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="contact-profissao" class="form-control input-lg" placeholder="Profissão">
                                    </div>
                                    <div class="form-group">
                                        <label>Ja trabalhou em atividades insalubres?</label>
                                        <select class="custom-select" name="contact-atividadeinsalubre">
                                            <option selected>Selecione</option>
                                            <option value="1">Sim</option>
                                            <option value="2">Não</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="contact-tempo-insalubre" class="form-control input-lg" placeholder="Por quantos anos?">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="contact-time-contribuicao" class="form-control input-lg" placeholder="Tempo total de Contribuição">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="contact-msg" class="form-control input-lg no-resize resize_vertical" rows="6" placeholder="Deixe sua mensagem"></textarea>
                                    </div>
                                    <div class="input-group">
                                        <button class="btn btn-primary mr-1" type="submit">Enviar</button>
                                        <button class="btn btn-danger" type="reset">Limpar</button>
                                    </div>
                                </form>
                            </section>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- //Images Section End -->
        </div>
    </section>

        <!-- //Content Section End -->
    
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
