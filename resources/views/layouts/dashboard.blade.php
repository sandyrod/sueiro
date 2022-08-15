@php
    $precio = \App\Models\Settings::find(1) ;
@endphp
<html>
    <head>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
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
                    @error('email')
                        <div class="alert alert-danger" style="width: 30%; margin-left:65%; position:absolute; margin-top:10%; z-index:1;"  role="alert">
                            <strong>{{ $message }}</strong> .
                        </div>                  
                    @enderror
                    @error('password')
                        <div class="alert alert-danger" style="width: 30%; margin-left:65%; position:absolute; margin-top:10%; z-index:1;"  role="alert">
                            <strong>{{ $message }}</strong> .
                        </div>           
                    @enderror
                    <div class="col-sm-4">
                        <div class="row">
                            @if (Auth::check())
                <div style="z-index: 999;" >
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
                        <li>
                            <a style="color: #c1282d; font-size:110%" class="dropdown-item" href="setting"><i class='fas fa-cog'></i> Configuración</a>
                        </li>
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
                                                        <div class="row col-md-9">
                                                            <a style="color: #fff" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >Crear nueva cuenta</a>
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
                    
                    <!-- Modal Register-->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content" style="background: #333333; color: #fff;">
                                <div class="modal-header" style="background:#c1282d; color: #fff;">
                                    <h5 class="modal-title" id="staticBackdropLabel">Registro</h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                            <div class="modal-body" >
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="last_name" class="col-md-4 col-form-label text-md-end">{{ __('Apellido') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
            
                                            @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electronico') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="document_type" class="col-md-4 col-form-label text-md-end">{{ __('Tipo de Identificación') }}</label>
            
                                        <div class="col-md-6">
                                        <select id="document_type" type="document_type" class="form-control @error('document_type') is-invalid @enderror" name="document_type" value="{{ old('document_type') }}" required autocomplete="document_type">
                                            <option value="86">CUIL</option>
                                            <option value="80">CUIT</option>
                                            <option value="87">CDI</option>
                                            <option value="89">LE</option>
                                            <option value="89">LC</option>
                                            <option value="96">DNI</option>
                                        </select>
            
                                            @error('document_type')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="document_number" class="col-md-4 col-form-label text-md-end">{{ __('Numero de Documento') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="document_number" type="document_number" class="form-control @error('document_number') is-invalid @enderror" name="document_number" value="{{ old('document_number') }}" required autocomplete="document_number">
            
                                            @error('document_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="condition" class="col-md-4 col-form-label text-md-end">{{ __('Condición Fiscal') }}</label>
            
                                        <div class="col-md-6">
                                        <select id="condition" type="condition" class="form-control @error('condition') is-invalid @enderror" name="condition" value="{{ old('condition') }}" required autocomplete="condition">
                                            <option value="CF">CONSUMIDOR FINAL</option>
                                            <option value="EX">EXENTO</option>
                                            <option value="EXE">EXENTO OPERACIÓN EXPORTACIÓN</option>
                                            <option value="INR">NO RESPONSABLE</option>
                                            <option value="RI">RESPONSABLE INSCRIPTO</option>
                                            <option value="RS">RESPONSABLE MONOTRIBUTISTA</option>
                                            <option value="RSS">RESPONSABLE MONOTRIBUTISTA SOCIAL</option>
                                            <option value="PCE">PEQUEÑO CONTRIBUYENTE EVENTUAL</option>
                                            <option value="PCS">PEQUEÑO CONTRIBUYENTE EVENTUAL SOCIAL</option>
                                            <option value="SNC">SUJETO NO CATEGORIZADO</option>
                                        </select>
            
                                            @error('condition')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="province_code" class="col-md-4 col-form-label text-md-end">{{ __('Provincia') }}</label>
            
                                        <div class="col-md-6">
                                        <select id="province_code" type="province_code" class="form-control @error('province_code') is-invalid @enderror" name="province_code" value="{{ old('province_code') }}" required autocomplete="province_code">
                                            <option value="0">CIUDAD AUTONOMA BUENOS AIRES</option>
                                            <option value="1">BUENOS AIRES</option>
                                            <option value="2">CATAMARCA</option>
                                            <option value="3">CORDOBA</option>
                                            <option value="4">CORRIENTES</option>
                                            <option value="5">ENTRE RIOS</option>
                                            <option value="6">JUJUY</option>
                                            <option value="7">MENDOZA</option>
                                            <option value="8">LA RIOJA</option>
                                            <option value="9">SALTA</option>
                                            <option value="10">SAN JUAN</option>
                                            <option value="11">SAN LUIS</option>
                                            <option value="12">SANTA FE</option>
                                            <option value="13">SANTIAGO DEL ESTERO</option>
                                            <option value="14">TUCUMAN</option>
                                            <option value="16">CHACO</option>
                                            <option value="17">CHUBUT</option>
                                            <option value="18">FORMOSA</option>
                                            <option value="19">MISIONES</option>
                                            <option value="20">NEUQUEN</option>
                                            <option value="21">LA PAMPA</option>
                                            <option value="22">RIO NEGRO</option>
                                            <option value="23">SANTA CRUZ</option>
                                            <option value="24">TIERRA DEL FUEGO</option>
                                        </select>
            
                                            @error('province_code')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="row mb-3">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar Contraseña') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
            
                                    <div class="row mb-0">
                                        <div class="col-md-8 offset-md-6">
                                            <button type="submit" class="btn btn-danger">
                                                {{ __('Registrar') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
                        <a class="nav-item nav-link" style="color: #fff"" href="product"><i style="margin-top: 30%" class="fas fa-search"></i></a>
                        <a class="nav-item nav-link" style="color: #fff"" href="product"></a>

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
    </body>
</html>
<script type="text/javascript">
                    
    $(document).ready(function () {
     
    window.setTimeout(function() {
        $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
            $(this).remove(); 
        });
    }, 5000);
     
    });
</script>