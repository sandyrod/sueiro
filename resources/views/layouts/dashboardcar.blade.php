@php
    $precio = \App\Models\Settings::find(1) ;
@endphp
<html>
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            @if (Auth::check())
                <div style="z-index: 1; margin-left:70%;" >
                    <button style="background: #333333" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <i style="color: #fff" class='fas fa-user'></i> {{\Illuminate\Support\Facades\Auth::user()->name}}
                    </button>
                    <ul style="width: 15%" class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <a style="color: #c1282d; font-size:110%" class="dropdown-item" href="#"><i class='fas fa-user'></i> {{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a style="color: #c1282d; font-size:110%" class="dropdown-item" href="favorites"><i class='fas fa-star'></i> Mis Favoritos</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        @if (auth()->user()->rol_user=='admin')
                            <li>
                                <a style="color: #c1282d; font-size:110%" class="dropdown-item" href="setting"><i class='fas fa-cog'></i> Configuración</a>
                            </li>
                        @endif
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="btn_logout" href="{{ url('/logout') }}"> Cerrar cession</a>
                        </li>
                    </ul>
                    <button style="background: #333333" class="btn btn-secondary" id="dropdownMenuButton1"  aria-expanded="false">
                        $ USD 1 | ARS {{$precio->dolar}}
                    </button>
                    
                    
                 </div>
            @endif   
        </div>

        <nav style="z-index:1; background: #333" class="sticky-sm-top navbar navbar-expand-lg">
            <a class="navbar-brand" href="home"><img src="{{ asset('/img/logo.png')}} "></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto mb-2 mb-lg-0" style="background: var(--unnamed-color-c1282d) 0% 0% no-repeat padding-box;
                background: #C1282D 0% 0% no-repeat padding-box;
                border-radius: 24px;
                ">
                    <a class="nav-item nav-link" style="color: #FFF" href=""></a>
                    <a class="nav-item nav-link" style="color: #FFF" href="product">PRODUCTOS</a>
                    <a class="nav-item nav-link" style="color: #FFF" href="nosotros">NOSOTROS </a>
                    <a class="nav-item nav-link" style="color: #FFF" href="contact">CONTACTO</a>
                    @guest
                        <a class="nav-item nav-link" style="color: #FFF" href="request">SOLICITAR PRESUPUESTO</a>
                        <a class="nav-item nav-link" style="color: #FFF" href="contact">CONTACTO</a>
                    @endguest
                    @if (Auth::check())
                        <a class="nav-item nav-link" style="color: #fff" href="request">SOLICITAR PRESUPUESTO</a>
                        <a class="nav-item nav-link" style="color: #FFF" href="orders">HISTÓRICO DE COMPRAS</a>
                        <a class="nav-item nav-link" style="color: #fff"" href="cotizador">COTIZADOR</a>
                        {{-- <a class="nav-item nav-link" style="color: #FFF" href="purchase-history">HISTÓRICO DE COMPRAS</a> --}}
                        <a class="nav-item nav-link" style="color: #FFF" href="quality">CALIDAD</a>
                        @if ($precio->activacion == '')
                            <a class="nav-item nav-link" style="color: #FFF; margin-top:0.5%;" href="shopping"><i class="fas fa-shopping-cart"></i></a>
                        @endif                       
                    @endif
                    <a class="nav-item nav-link" style="color: #fff"" href="product"><i style="margin-top: 30%" class="fas fa-search"></i></a>
                    <a class="nav-item nav-link" style="color: #FFF" href=""></a>
                </div>
            </div>
        </nav>
        <div>
        @yield('content')
        </div>
        @livewireScripts
        <!-- FOOTER -->
        <footer class="w-100 py-4 flex-shrink-0">
            <div class="row">
                <div class="col-sm-2">
                    <img style=" height: 50%; margin-left:15%;" src="{{ asset('/img/logofooter.png')}}">    
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
                                    <a class="link_footer" href="nosotros"><span>NOSOTROS</span> </a> 
                                    <br>
                                    <a class="link_footer" href="product"><span>PRODUCTOS</span></a> 
                                </div>
                                <div class="col-sm-2">
                                    <a class="link_footer" href="request"><span>SOLICITAR PRESUPUESTO </span></a>
                                    <br>
                                    <a class="link_footer" href="contact"><span>CONTACTO</span></a>
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
        </footer>
    </body>
</html>