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
        <div class="cabezera_titleloge">
            <a class="cabezera__text" href="products">PRODUCTOS</a>
        </div>
        <div style="" class="cabezera_titleloge1">
            <a class="cabezera__text" href="request">PEDIDOS</a>
        </div>
        <div class="cabezera_titleloge2">
            <a class="cabezera__text" href="remittances">REMITOS</a>
        </div>
        <div class="cabezera_titleloge3">
            <a class="cabezera__text" href="order-history">HISTÓRICO DE COMPRAS</a>
        </div> 
        <div class="cabezera_titleloge4">
            <a class="cabezera__text" href="quality">CALIDAD</a>
        </div> 
        <div class="cabezera_titleloge5">
            <a class="cabezera__text" href="shopping"><i class="fas fa-shopping-cart"></i></a>
        </div>
    </div>
    @yield('content')
</body>