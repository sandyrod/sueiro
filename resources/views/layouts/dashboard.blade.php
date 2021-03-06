<html>
    <head>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container-fluid" style="background: #333;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-4 " style="color:#ffffff;margin-top:2%;">
                                <i class="fas fa-map-marker-alt">
                                <span>Bergamini 1127 - Ciudadela</span></i>
                            </div>
                            <div class="col-sm-4" style="color:#ffffff;margin-top:2%;">
                                <i class="far fa-envelope">
                                <span>Ventas@sueiroehijos.com.ar</span></i>
                            </div>
                            <div class="col-sm-4" style="color:#ffffff;margin-top:2%;">
                                <i class="fas fa-phone-alt">
                                <span>54-11 4488-4649 / 3825</span></i>
                            </div>
                            <div class="col-sm-4" style="color:#ffffff;margin-top:2%;">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="row">
                            <div class="col-sm-6 " style="color: #ffffff">
                                @guest
                                    <i class="far fa-user" style="color:#ffffff;margin-top:8%;">
                                    <span data-bs-toggle="modal" href="#exampleModalToggle">ZONA PRIVADA</span></i>
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
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="background: #333">
            <nav style="z-index:1" style="background: #333"  class="sticky-sm-top navbar navbar-expand-lg ">
                <a class="navbar-brand" href="home"><img src="/img/logo.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ms-auto mb-2 mb-lg-0" style="background: var(--unnamed-color-c1282d) 0% 0% no-repeat padding-box;
                    background: #C1282D 0% 0% no-repeat padding-box;
                    border-radius: 24px;
                    ">
                    <a class="nav-item nav-link" style="color: black" href=""></a>
                        <a class="nav-item nav-link" style="color: #fff" href="product">PRODUCTOS</a>
                        <a class="nav-item nav-link" style="color: #fff"" href="nosotros">NOSOTROS </a>
                        <a class="nav-item nav-link" style="color: #fff"" href="request">SOLICITAR PRESUPUESTO</a>
                        <a class="nav-item nav-link" style="color: #fff"" href="contact">CONTACTO</a>
                        <a class="nav-item nav-link" style="color: #fff"" href=""><i style="margin-top: 30%" class="fas fa-search"></i></a>
                        <a class="nav-item nav-link" style="color: #fff"" href=""></a>

                    </div>
                </div>
            </nav>
        </div>
        <div class="main">
            @yield('content')
        </div>
        @livewireScripts
        {{-- footer --}}
        <div class="row">
            <div class="col-sm-2">
                <img style=" height: 50%; margin-left:15%;" src="/img/logofooter.png">    
                    <br><br><div class="row">                
                    <div class="col-sm-4"></div>
                    <div class="col-sm-2">
                        <i  class="fab fa-facebook-f"></i>
                    </div>
                    <div class="col-sm-2">
                        <i class="fab fa-instagram"></i>
                    </div>
                </div>
            </div>    
            <div class="col">
                <div class="footer_container2">
                    <br>
                    <div class="row footer__cont_red">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-4"><span>SECCIONES</span></div>
                        <div class="col-sm-4"><span>SUSCRIBITE AL NEWSLETTER</span></div>
                        <div class="col-sm-2"><span>CONTACTO</span></div>
                    </div>
                    <br>
                    <div class="row footer__cont_whait">
                        <div class="col-sm-1"></div>
                            <div class="col-sm-2">
                                <span>NOSOTROS</span>
                                <br>
                                <span>PRODUCTOS</span>
                            </div>
                            <div class="col-sm-2">
                                <span>SOLICITAR PRESUPUESTO </span>
                                <br>
                                <span>CONTACTO</span>
                            </div>
                            <div class="col-sm-4">                            
                                <form action="{{ route('suscribe') }}" method='post'>
                                    @csrf
                                    <input class="footer__input_email" placeholder="       Ingresa tu email" id="search" name="email" type="text" value="">
                                    <button class="footer__btn_email"><i style="position: absolute;top: 35%;left: 35%; color:#fff;" class="fas fa-paper-plane"></i></button>
                                </form>
                            </div>
                            <div class="col-sm-3">
                                <i class="fas fa-map-marker-alt"> <span> Bergamini 1127 - Ciudadela</span></i>
                                <br><br>
                                <i class="far fa-envelope"> <span> Ventas@sueiroehijos.com.ar</span></i>
                                <br><br>
                                <i class="fas fa-phone-alt"> <span> 54-11 4488-4649 / 3825</span></i>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>