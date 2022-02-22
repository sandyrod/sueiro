<html>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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
        @guest
        <div class="banner_title4">
            <i class="far fa-user"></i>
            <span data-bs-toggle="modal"  href="#exampleModalToggle" class="">ZONA PRIVADA</span>
            {{-- <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a> --}}
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="modal modal-sm" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" style="margin-left: 40% "  tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content" style="background: #333333">
                            <div class="modal-body row justify-content-center align-items-center ">
                                <div class=" col-lg-10 ">
                                    <input id="email" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="Background-color: transparent; color:#fff" class="form-control input-sm" type="text" placeholder="User"><br><br>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    
                                    <input id="password" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="Background-color: transparent; color:#fff" class="form-control input-sm" type="password" placeholder="Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="row col-md-12">
                                    <button {{ __('Login') }} type="submit" class="btn btn-danger">Ingresar</button>
                                </div>
                                <div class="row col-md-12">
                                    <a style="color: #fff" >Crear nueva cuenta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        @endguest
        
        <div class="banner_title5">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            @if (Auth::check())
                <a href="{{ url('/logout') }}"> Cerrar cession</a>
            @endif
        </div>
        
    </div>
    <div class="cabecera">
        <div class="logo">
            <a href="home"> <img src="/img/logo.png"></a>
        </div>
        <div class="cabecera_title">
            <a class="cabecera__text" href="nosotros">NOSOTROS</a>
        </div>
        @guest
        <div style="" class="cabecera_titleloge1">
            <a class="cabecera__text" href="request">PEDIDOS</a>
        </div>
        <div class="cabecera_title2">
            <a class="cabecera__text" href="request">SOLICITAR PRESUPUESTO</a>
        </div>
        <div class="cabecera_title3">
            <a class="cabecera__text" href="contact">CONTACTO</a>
        </div>
        @endguest
        @if (Auth::check())
            <div class="cabecera_titleloge2">
                <a class="cabecera__text" href="remittances">REMITOS</a>
            </div>
            <div class="cabecera_titleloge3">
                <a class="cabecera__text" href="order-history">HISTÓRICO DE COMPRAS</a>
            </div> 
            <div class="cabecera_titleloge4">
                <a class="cabecera__text" href="quality">CALIDAD</a>
            </div> 
        @endif
        <div class="cabecera_titleloge5">
            <a class="cabecera__text" href="shopping"><i class="fas fa-shopping-cart"></i></a>
        </div>
    </div>
    <div>
    @yield('content')
    </div>
    @livewireScripts
</body>
</html>