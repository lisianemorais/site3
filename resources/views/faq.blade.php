@extends('layouts/default')

{{-- Page title --}}
@section('title')
    FAQ
    @parent
    @stop

    {{-- page level styles --}}
    @section('header_styles')
            <!--start of page level css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend/faq.css') }}">
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
                <li class="hidden-xs">
                    <i class="livicon icon3" data-name="angle-double-right" data-size="18" data-loop="true" data-c="#01bc8c" data-hc="#01bc8c"></i>
                    <a href="#">Dúvidas Frequentes</a>
                </li>
            </ol>
            <div class="float-right breadcrum_adjust">
                <i class="livicon icon3" data-name="question" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i> Dúvidas Frequentes
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
        <div class="row my-3">
            <div class="col-md-12 col-12 col-lg-12 col-sm-12">
                <div class="control-bar sandbox-control-bar mt10">
                    <span class="btn btn-primary mr10 mb10 filter active" data-filter="all">Todos</span>
                    <span class="btn btn-primary mr10 mb10 filter" data-filter=".category-1">Aposentadoria</span>
                    <span class="btn btn-primary mr10 mb10 filter" data-filter=".category-2">Revisional</span>
                    <span class="btn btn-primary mr10 mb10 filter" data-filter=".category-3">Trabalhista</span>
                </div>
                <div class="card card_collapse">
                    <div class="card-body">
                        <div class="panel-group panel-accordion faq-accordion">
                            <div id="faq">
                                @include('questions/question1')
                                @include('questions/question2')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <script type="text/javascript" src="{{ asset('assets/js/frontend/faq.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery.mixitup.js') }}"></script>

    <script type="text/javascript" src="{{ asset('assets/vendors/mixitup/mixitup.js') }}"></script>
@stop
