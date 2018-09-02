@extends('layouts/default')

{{-- Page title --}}
@section('title')
Blank
@parent
@stop

{{-- page level styles --}}
@section('header_styles')
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
                    <a href="#">Como se aposentar</a>
                </li>
            </ol>
            <div class="float-right breadcrum_adjust">
                <i class="livicon icon3" data-name="edit" data-size="20" data-loop="true" data-c="#3d3d3d" data-hc="#3d3d3d"></i>Como se aposentar
            </div>
        </div>
    </div>
        </div>
    </div>
@stop

{{-- Page content --}}
@section('content')
<form class="contact" id="contact" action="{{route('contact')}}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div class="form-group">
        <input type="text" name="contact-name" class="form-control input-lg" placeholder="Digite seu nome" required>
    </div>
    <div class="form-group">
        <input type="email" name="contact-email" class="form-control input-lg" placeholder="Digite seu endereço de e-mail" required>
    </div>
    <div class="form-group">
        <textarea name="contact-msg" class="form-control input-lg no-resize resize_vertical" rows="6" placeholder="Deixe sua mensagem" required></textarea>
    </div>
    <div class="input-group">
        <button class="btn btn-primary mr-1" type="submit">Enviar</button>
        <button class="btn btn-danger" type="reset">Limpar</button>
    </div>
</form>
@stop

{{-- page level scripts --}}
@section('footer_scripts')

@stop
