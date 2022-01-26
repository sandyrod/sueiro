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
                <img src="/img/logo.png">
            </div>
            <div class="cabecera_title">
                <a class="cabecera__text" href="nosotros">NOSOTROS</a>
            </div>
            <div class="cabecera_title1">
                <a class="cabecera__text" href="products">PRODUCTOS</a>
            </div>
            <div class="cabecera_title2">
                <a class="cabecera__text" href="request">SOLICITAR PRESUPUESTO</a>
            </div>
            <div class="cabecera_title3">
                <a class="cabecera__text" href="contact">CONTACTO</a>
            </div>
        </div>

        <div class="carrusel">
            <img src="/img/carrusel.png" class="carrusel_img">
            <div class="carrusel_title">
                <span>SUEIRO E HIJOS</span>
            </div>
            <div class="carrusel_subtitle">
                <span>Somos una empresa dedicada a proporcionar las mejores soluciones de filtración con 30 años de experiencia en el rubro.</span>
            </div>
            <div class="carousel-indicators">
                <button></button>
                <button></button>
                <button></button>
            </div>
        </div>
        <div class="main">
        @yield('content')
        </div>
        <footer class="footer">
            <div class="footer_container">
                <div class="footer__logo">
                    <img style="vertical-align: middle; height: 105%;" src="/img/logofooter.png">
                    <i style="left: 40%; top:125%; position:absolute; " class="fab fa-facebook-f"></i>
                    <i style="left: 55%; top:125%; position:absolute; "class="fab fa-instagram"></i>
                </div>            
            </div>
            <div class="footer_container2">
                <div>
                    <br><br>
                    <span class="footer__cont">SECCIONES</span>
                    <span class="footer__cont1">SUSCRIBITE AL NEWSLETTER</span>
                    <span class="footer__cont2">CONTACTO</span>
                </div>
                <span class="footer__nosotros">NOSOTROS PRODUCTOS</span>
                <span class="footer__solicitar">SOLICITAR PRESUPUESTO CONTACTO</span>
                <input class="footer__input" placeholder="       Ingresa tu email" id="search" name="search" type="text" value="{{old('search')}}">
                <button class="footer__btn"><i style="position: absolute;top: 35%;left: 35%; color:#fff;" class="fas fa-paper-plane"></i></button>
                <div class="footer__contacto">
                    <div class="footer__logo--location">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <span class="footer__contacto--title" >Bergamini 1127 - Ciudadela</span>
                    <div class="footer__logo--envelope">
                        <i class="far fa-envelope"></i>
                    </div>
                    <span class="footer__contacto--title1" >ventas@sueiroehijos.com.ar</span>
                    <div class="footer__logo--phone">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <span class="footer__contacto--title2" >54-11 4488-4649 / 3825</span>
                </div>
            </div>
        </footer>
    </body>
</html>