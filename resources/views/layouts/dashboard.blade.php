<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body class="body">
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
    <div class="cabezera">
        <div class="logo">
            <img src="/img/logo.png">
        </div>
        <div class="cabezera_title">
            <a class="cabezera__text" href="nosotros">NOSOTROS</a>
        </div>
        <div class="cabezera_title1">
            <a class="cabezera__text" href="products">PRODUCTOS</a>
        </div>
        <div class="cabezera_title2">
            <a class="cabezera__text" href="request">SOLICITAR PRESUPUESTO</a>
        </div>
        <div class="cabezera_title3">
            <a class="cabezera__text" href="contact">CONTACTO</a>
        </div>
    </div>

    <div class="carrusel">
        <div class="carousel-indicators">
            <button></button>
            <button></button>
            <button></button>
        </div>
        <img src="/img/carrusel.png" class="carrusel_img">
        <div class="carrusel_title">
            <span>SUEIRO E HIJOS</span>
        </div>
        <div class="carrusel_sudtitle">
            <span>Somos una empresa dedicada a proporcionar las mejores soluciones de filtración con 30 años de experiencia en el rubro.</span>
        </div>
    </div>
    @yield('content')
</body>
