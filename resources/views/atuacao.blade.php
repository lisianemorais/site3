@extends('layouts/default')

{{-- Page title --}}
@section('title')
Áreas de Atuação
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
<!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/panel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/features.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/timeline.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/vendors/switchery/css/switchery.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-switch/css/bootstrap-switch.css') }}">
    <style>
        .card-heading span {
            margin-top: -20px;
            font-size: 15px;
        }
    </style>

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
                            <a href="#">Áreas de Atuação</a>
                        </li>
                    </ol>
                    <div class="float-right breadcrum_adjust">
                        <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Áreas de Atuação
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
             <h1 style="margin-left: 13px;">Áreas de Atuação</h3>

             <h4 style="margin-left: 15px;"> A Lima e Souza Advogados garante a excelência nos serviços prestados ocupando posição de destaque nos seus ramos de atuação. São eles: </h4>

             <div class="row">
                <div class="col-md-6 my-2">
                    <div class="card panel-primary">
                        <div class="card-heading">
                            <h4 class="card-title">Direito Previdenciário</h4>
                        </div>
                        <div class="card-body">
                        <p>
                            Regimes geral e próprios (fases administrativa e judicial) e ações envolvendo acidente de trabalho.
                        </p>
                        <ul>
                            <li>Aposentadorias</li>
                            <li>Pensões</li>
                            <li>Benefício do INSS</li>
                            <li>Outros</li>
                        </ul>
                        <button class="btn btn-responsive button-alignment btn-default">
                             <a href="{{ URL::to('previdenciario') }}"  > Saiba Mais </a>
                        </button>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 my-2">
                    <div class="card panel-primary">
                        <div class="card-heading">
                            <h4 class="card-title">Direito Cívil</h4>
                        </div>
                        <div class="card-body">
                        <p>
                            Com ênfase em direito de família e sucessões.
                            <ul>
                                <li>Pensões Alimentícias</li>
                                <li>Inventários</li>
                                <li>Outros</li>
                            </ul>
                        </p>
                        <button type="button" class="btn btn-responsive button-alignment btn-default">
                            <a href=""> Saiba mais</a>
                        </button>
                    </div>
                    </div>
                </div>
             </div>
             <div class="row">
                <div class="col-md-6 my-2">
                    <div class="card panel-primary">
                        <div class="card-heading">
                            <h4 class="card-title">Direito Trabalhista</h4>
                        </div>
                        <div class="card-body">
                        <p>
                            Ações em geral e ações envolvendo acidente do trabalho.
                        </p>
                        <button type="button" class="btn btn-responsive button-alignment btn-default">
                            <a href=""> Saiba mais</a>
                        </button>
                    </div>
                    </div>
                </div>
                <div class="col-md-6 my-2">
                    <div class="card panel-primary">
                        <div class="card-heading">
                            <h4 class="card-title">Direito Bancário</h4>
                        </div>
                        <div class="card-body">
                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. 
                        </p>
                        <button type="button" class="btn btn-responsive button-alignment btn-default">
                            <a href=""> Saiba mais</a>
                        </button>
                    </div>
                    </div>
                </div>
             </div>

        <!-- //Content Section End -->
    </div>
    
@stop

{{-- page level scripts --}}
@section('footer_scripts')
 <script type="text/javascript" src="{{ asset('assets/vendors/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>
    <!--<script type="text/javascript" src="{{ asset('assets/vendors/modal/js/classie.js') }}"></script>-->
    <!--<script type="text/javascript" src="{{ asset('assets/vendors/modal/js/modalEffects.js') }}"></script>-->
    <script type="text/javascript" src="{{ asset('assets/vendors/switchery/js/switchery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vendors/bootstrap-switch/js/bootstrap-switch.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/frontend/advfeatures.js') }}"></script>
    <!--page level js ends-->
@stop
