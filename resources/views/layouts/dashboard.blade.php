<html>
    <head>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="banner">
            <div class="banner_title">
                <i class="fas fa-map-marker-alt"></i>
                <span class="">Bergamini 1127 - Ciudadela</span>
            </div>
            <div class="banner_title2">
                <i class="far fa-envelope"></i>
                <span class="">ventas@sueiroehijos.com.ar</span>
            </div>
            <div class="banner_title3">
                <i class="fas fa-phone-alt"></i>
                <span class="">54-11 4488-4649 / 3825</span>
            </div>
            <div class="banner_title4">
                <i class="far fa-user"></i>
                <span class="">ZONA PRIVADA</span>
            </div>
            <div class="banner_title5">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-instagram"></i>            
            </div>
        </div>
        <div class="cabecera">
            <div class="logo">
               <a href="home"> <img src="/img/logo.png"></a>
            </div>
            <div class="cabecera_title">
                <a class="cabecera__text" href="nosotros">NOSOTROS</a>
            </div>
            <div class="cabecera_title1">
                <a class="cabecera__text" href="product">PRODUCTOS</a>
            </div>
            <div class="cabecera_title2">
                <a class="cabecera__text" href="request">SOLICITAR PRESUPUESTO</a>
            </div>
            <div class="cabecera_title3">
                <a class="cabecera__text" href="contact">CONTACTO</a>
            </div>
        </div>
        <div class="main">
        @yield('content')
        </div>
        @livewireScripts
    </body>
</html>