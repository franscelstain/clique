@php
    $controller = DzHelper::controller();
    $page = $action = DzHelper::action();
    $action = $controller.'_'.$action;
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
	<!-- PAGE TITLE HERE -->
	<title>{{ config('dz.name') }} | Global DEEP TECH Community</title>

    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="landing" />
	<meta name="author" content="Clique" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Deep Tech Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name="author" content="Clique">
    <meta name="generator" content="Deep tech community">
    
    <!-- theme meta -->
    <meta name="theme-name" content="deep tech" />

	<!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png')}}">

	@if(!empty(config('dz.public.pagelevel.css.'.$action))) 
        @foreach(config('dz.public.pagelevel.css.'.$action) as $style)
            <link href="{{ asset($style) }}" rel="stylesheet" type="text/css"/>
        @endforeach
    @endif

    {{-- Global Theme Styles (used by all pages) --}}
    @if(!empty(config('dz.public.global.css'))) 
        @foreach(config('dz.public.global.css') as $style)
            <link href="{{ asset($style) }}" rel="stylesheet" type="text/css"/>
        @endforeach
    @endif

    @stack('style')

</head>
<body id="home" data-spy="scroll" data-target=".navbar-nav" data-offset="80">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

     <!--
    Welcome Slider
    ==================================== -->

    <section class="hero-area overlay" style="background-image: url('{{ asset('images/landing/banner/hero-area.jpg') }}');">
        <!-- <video autoplay muted loop class="hero-video">
            <source src="youtube" type="video/mp4">
        </video> -->
        <div class="block">
            <div class="video-button mb-5">
                <a class="popup-video" href="https://www.youtube-nocookie.com/embed/mKi-3V5_D5Y?si=JI-_ui6yfdBrYdss">
                    <i class="fas fa-play"></i>
                </a>
            </div>
            <h1>Deep Tech without border</h1>
            <p>Connecting global deep tech minds and fostering a new culture of innovation and collaboration</p>
            <a href="#services" class="btn btn-transparent smooth-scroll">Explore Us</a>
        </div>
    </section>

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div id="nav-logo" class="nav-header" style="border-bottom: 1px solid #646464">
            <a href="{{ url('/') }}" class="brand-logo">
                <img class="logo-clique" src="{{ asset('images/logo-clique.png') }}" alt="Website Logo" height="50" />
            </a>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
		@include('elements.header_landing')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

		@php
            $body_class = '';
            if($page == 'ui_button'){ $body_class = 'btn-page';} 
            if($page == 'ui_badge'){ $body_class = 'badge-demo';}
        @endphp
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body {{ $body_class }}">
			@yield('content')
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

		@stack('modals')

        <!--**********************************
            Footer start
        ***********************************-->
        <!-- include('elements.footer') -->
        <!--**********************************
            Footer end
        ***********************************-->
	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->


    <!--**********************************
        Scripts
    ***********************************-->
	<!-- Required vendors -->
    @if(!empty(config('dz.public.global.js.top')))
        @foreach(config('dz.public.global.js.top') as $script)
            <script src="{{ asset($script) }}" type="text/javascript"></script>
        @endforeach
    @endif
    @if(!empty(config('dz.public.pagelevel.js.'.$action)))
        @foreach(config('dz.public.pagelevel.js.'.$action) as $script)
            <script src="{{ asset($script) }}" type="text/javascript"></script>
        @endforeach
    @endif

    @stack('scripts')
	
</body>
</html>