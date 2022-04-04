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
                    <a class="logout" href="{{ url('/logout') }}"> Cerrar cession</a>
                @endif          
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="home"><img src="/img/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <a class="nav-item nav-link" style="color: black" href="product">PRODUCTOS</a>
                    <a class="nav-item nav-link" style="color: black" href="nosotros">NOSOTROS </a>
                    <a class="nav-item nav-link" style="color: black" href="request">SOLICITAR PRESUPUESTO</a>
                    <a class="nav-item nav-link" style="color: black" href="contact">CONTACTO</a>
                </div>
            </div>
        </nav>
        <div class="main">
            @yield('content')
        </div>
        @livewireScripts
    </body>
</html>