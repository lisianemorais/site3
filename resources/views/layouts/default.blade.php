<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <title>
        @section('title')
        | Welcome to Josh Frontend
        @show
    </title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/lib.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">
    <style>
      .dropdown-item:active{
            background-color: transparent !important;
        }
      .indexpage.navbar-nav >.nav-item .nav-link:hover {
          color: #01bc8c;
      }
    </style>
    <!--end of global css-
    <!--page level css-->
    @yield('header_styles')
    <!--end of page level css-->
</head>

<body>
<!-- Header Start -->
<header>
    <!--Icon Section Start-->
    <div class="icon-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-8 col-md-4 mt10">
                    <ul class="list-inline">
                        <li>
                            <a href="#"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#fff"
                                            data-hc="#757b87"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#fff"
                                            data-hc="#757b87"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="livicon" data-name="google-plus" data-size="18" data-loop="true"
                                            data-c="#fff" data-hc="#757b87"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true" data-c="#fff"
                                            data-hc="#757b87"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="livicon" data-name="rss" data-size="18" data-loop="true" data-c="#fff"
                                            data-hc="#757b87"></i>
                            </a>
                        </li>
                        </ul>
                </div>
                <div class="col-lg-8 col-4 col-md-8 text-right mt10">
                    <ul class="list-inline">
                        <li>
                            <a href="mailto:"><i class="livicon" data-name="mail" data-size="18" data-loop="true"
                                                 data-c="#fff"
                                                 data-hc="#fff"></i></a>
                            <label class="d-none d-md-inline-block d-lg-inline-block d-xl-inline-block"><a
                                    href="mailto:"
                                    class="text-white">admin@gmail.com</a></label>
                        </li>
                        <li>
                            <a href="tel:"><i class="livicon" data-name="phone" data-size="18" data-loop="true"
                                              data-c="#fff"
                                              data-hc="#fff"></i></a>
                            <label class="d-none d-md-inline-block d-lg-inline-block d-xl-inline-block"><a href="tel:"
                                                                                                           class="text-white">(51) 3737-9004</a></label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container indexpage">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}"
                                                                    alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto  margin_right">
                    <li  class="nav-item {!! (Request::is(
                    '/') ? 'active' : '') !!}"><a href="{{ route('home') }}" class="nav-link"> Home</a></li>
                    <li class="nav-item {!! (Request::is(
                    'aboutus') ? 'active' : '') !!}"><a href="{{ URL::to('aboutus') }}" class="dropdown-item">O Escritório</a>
                    <!-- <li class="nav-item {!! (Request::is(
                    'blog') || Request::is('blogitem/*') ? 'active' : '') !!}"><a href="{{ URL::to('blog') }}" class="nav-link">
                    Blog</a>
                    </li> -->
                    <li class="nav-item dropdown {!! (Request::is('aposentadoria') || Request::is('portfolioitem') ? 'active' : '') !!}">
                        <a href="atuacao" class="nav-link"> Áreas de Atuação</a>
                        <!-- <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ URL::to('aposentadoria') }}">Aposentadorias</a>
                            </li>
                            <li><a href="{{ URL::to('portfolio') }}">Direito do Trabalho</a>
                            </li>
                            <li><a href="#">Direito Bancário</a>
                            </li>
                           <!--  <li><a href="#">Pensão</a>
                            </li> -->
                        <!-- </ul> --> 
                    </li>
                    
                    <li class="nav-item {!! (Request::is(
                    'contact') ? 'active' : '') !!}"><a href="{{ URL::to('contact') }}" class="nav-link">Contato</a>
                    </li>

                   <!--  {{--based on anyone login or not display menu items--}}
                    @if(Sentinel::guest())
                    <li class="nav-item"><a href="{{ URL::to('login') }}" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item"><a href="{{ URL::to('register') }}" class="nav-link">Fazer Login</a>
                    </li>
                    @else
                    <li class="nav-item {{ (Request::is('my-account') ? 'active' : '') }}"><a href="{{ URL::to('my-account') }}" class="nav-link">Minha Conta</a>
                    </li>
                    <li class="nav-item"><a href="{{ URL::to('logout') }}" class="nav-link">Logout</a>
                    </li>
                    @endif -->
                </ul>
            </div>
        </nav>
        <!-- Nav bar End -->
    </div>
</header>

<!-- //Header End -->

<!-- slider / breadcrumbs section -->
@yield('top')

<!-- Content -->
@yield('content')

<!-- Footer Section Start -->
<footer>
    <div class=" container">
        <div class="footer-text">
            <!-- About Us Section Start -->
            <div class="row">
                <div class="col-sm-4 col-lg-4 col-md-4 col-12">
                    <h4>Sobre Nós</h4>
                    <p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industryzzzz's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.It has survived not only five centuries,
                        but also the leap into electronic typesetting, remaining essentially unchanged.
                    </p>
                    <hr id="hr_border2">
                    <h4 class="menu">Siga-nos</h4>
                    <ul class="list-inline mb-2">
                        <li>
                            <a href="#"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true"
                                            data-c="#ccc" data-hc="#ccc"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true"
                                            data-c="#ccc" data-hc="#ccc"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="livicon" data-name="google-plus" data-size="18" data-loop="true"
                                            data-c="#ccc" data-hc="#ccc"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="livicon" data-name="linkedin" data-size="18" data-loop="true"
                                            data-c="#ccc" data-hc="#ccc"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"> <i class="livicon" data-name="rss" data-size="18" data-loop="true"
                                            data-c="#ccc" data-hc="#ccc"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- //About us Section End -->
                <!-- Contact Section Start -->
                <div class="col-sm-4 col-lg-4 col-md-4 col-12">
                    <h4>Contato</h4>
                    <ul class="list-unstyled">
                        <li>Av Azenha 1678/503, Azenha</li>
                        <li>Porto Alegre - RS.</li>
                        <li>CEP 90160-000</li>
                        <li><i class="livicon icon4 icon3" data-name="cellphone" data-size="18" data-loop="true"
                               data-c="#ccc" data-hc="#ccc"></i>Telefone: (51)3737-9004
                        </li>
                        <li><i class="livicon icon3" data-name="mail-alt" data-size="20" data-loop="true" data-c="#ccc"
                               data-hc="#ccc"></i> Email:<span class="text-success" style="cursor: pointer;">
                        contato@gmail.com</span>
                        </li>
                    </ul>
                    <hr id="hr_border">
                    <div class="news menu">
                        <h4>News letter</h4>
                        <p>Assine nosso blog e receba novos posts diretamente em seu email.</p>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Insira seu email"
                                   aria-describedby="basic-addon2">
                            <a href="#" class="btn btn-primary text-white" role="button">Assinar</a>
                        </div>
                    </div>
                </div>
                <!-- //Contact Section End -->
                <!-- Recent post Section Start -->
                <div class="col-sm-4 col-lg-4 col-md-4 col-12">
                    <h4>Posts Recente</h4>
                    <div class="media">
                        <img class="media-object rounded-circle mr-3" src="{{ asset('assets/images/image_14.jpg') }}"
                             alt="image">
                        <div class="media-body">
                            <p class="media-heading text-justify">Lorem Ipsum is simply dummy text of the printing and type setting
                                industry dummy.</p>
                            <p class="text-right"><i>Sam Bellows</i></p>
                        </div>
                    </div>
                    <div class="media">
                        <img class="media-object rounded-circle mr-3" src="{{ asset('assets/images/image_15.jpg') }}"
                             alt="image">

                        <div class="media-body">
                            <p class="media-heading text-justify">Lorem Ipsum is simply dummy text of the printing and type setting
                                industry dummy.</p>
                            <p class="text-right"><i>Emilly Barbosa Cunha</i></p>
                        </div>
                    </div>
                    <div class="media">
                        <img class="media-object rounded-circle mr-3" src="{{ asset('assets/images/image_13.jpg') }}"
                             alt="image">
                        <div class="media-body">
                            <p class="media-heading text-justify">Lorem Ipsum is simply dummy text of the printing and type setting
                                industry dummy.</p>
                            <p class="text-right"><i>Sinikka Oramo</i></p>
                        </div>
                    </div>
                    <div class="media">
                        <img class="media-object rounded-circle mr-3" src="{{ asset('assets/images/c1.jpg') }}"
                             alt="image">

                        <div class="media-body">
                            <p class="media-heading text-justify">Lorem Ipsum is simply dummy text of the printing and type setting
                                industry dummy.</p>
                            <p class="text-right"><i>Samsa Parras</i></p>
                        </div>
                    </div>
                    <!-- //Recent Post Section End -->
                </div>
            </div>
        </div>
    </div>
<!-- //Footer Section End -->
<div class=" col-12 copyright">
    <div class="container">
        <p>Copyright &copy; Lima&Souza Advogados, 2018</p>
    </div>
</div>
</footer>
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" data-original-title="Return to top"
   data-toggle="tooltip" data-placement="left">
    <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
</a>



<!--global js starts-->
<script type="text/javascript" src="{{ asset('assets/js/frontend/lib.js') }}"></script>
<!--global js end-->
<!-- begin page level js -->
@yield('footer_scripts')
<!-- end page level js -->
<script>
    $(".navbar-toggler-icon").click(function () {
        $(this).closest('.navbar').find('.collapse').toggleClass('collapse1')
    })

    $(function () {
        $('[data-toggle="tooltip"]').tooltip().css('font-size', '14px');
    })
</script>
</body>

</html>
