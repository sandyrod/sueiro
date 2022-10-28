<form action="{{route('contact.store')}}" method="POST">
    @csrf
    {!! htmlFormSnippet() !!}
    <div class="request_titlenav">
        <div class="row request align-items-center" style="height: 39px;">
            <div class="col-md-12">
                <span class="ubication"><strong>Inicio</strong> | Contacto</span>
            </div>
        </div>
    </div>
    {{ csrf_field() }}
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <p>Corrige los siguientes errores:</p>
            <ul>
                @foreach ($errors->all() as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.143550548068!2d-58.53818750000001!3d-34.6258125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7c77ca45177ec70b!2s48Q39FF6%2BMP!5e0!3m2!1ses-419!2sve!4v1643913947570!5m2!1ses-419!2sve" width="1349" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4" >
                <br><br>
                <i class="fas fa-map-marker-alt"> <span> Bergamini 1127 - Ciudadela</span></i>
                <br><br>
                <i class="far fa-envelope"> <span> Ventas@sueiroehijos.com.ar</span></i>
                <br><br>
                <i class="fas fa-phone-alt"> <span> 54-11 4488-4649 / 3825</span></i>
                <br><br>
                <i class="far fa-address-card" style="margin-bottom:10px;"> <span> 30-71085514-1</span></i>
            </div>
            <div class="col-sm-4">
                <br>
                <input class="contact__imputname-1 form-control" placeholder="Nombre" id="name" name="name" required><br>
                <input class="contact__imputname-1 form-control" placeholder="Correo Elsectronico" id="correo" name="correo" required><br>
                <textarea class="contact__imputname-1 form-control" placeholder="Mensaje" id="mensaje" name="mensaje"></textarea required><br>

            </div>
            <div class="col-sm-4">
                <br>
                <input class="contact__imputname-1 form-control" placeholder="Apellido" id="apellido" name="apellido" required><br>
                <input class="contact__imputname-1 form-control" placeholder="Empresa *" id="empresa" name="empresa" required><br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                    <label class="form-check-label" for="flexCheckDefault">
                        Acepto los términos y condiciones de privacidad
                    </label>
                </div>
                <button type="submit" class="contact__btn" ><i class="fa fa-save"> </i> ENVIAR </button>
            </div>
        </div>
        
    </div>









            {{-- <div class="contact__redes">
                <div class="footer__logo--location">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <span style="color: #000" class="footer__contacto--title" >Bergamini 1127 - Ciudadela</span>
                <div class="footer__logo--envelope">
                    <i class="far fa-envelope"></i>
                </div>
                <span style="color: #000" class="footer__contacto--title1" >ventas@sueiroehijos.com.ar</span>
                <div class="footer__logo--phone">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <span style="color: #000" class="footer__contacto--title2" >54-11 4488-4649 / 3825</span>
            </div> --}}
            {{-- <div class="contact__cuerpo">
                <input class="contact__imputname" placeholder="Nombre" id="name" name="name" required>
                <input class="contact__imputape" placeholder="Apellido" id="apellido" name="apellido" required>
                <input class="contact__imputmail" placeholder="Correo Electronico" id="correo" name="correo" required>
                <input class="contact__imputempresa" placeholder="Empresa *" id="empresa" name="empresa" required>
                <textarea class="contact__texmsj" placeholder="Mensaje" id="mensaje" name="mensaje"></textarea required>
                <div class="contact__terminos">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                    <span> Acepto los términos y condiciones de privacidad</span>
                </div> --}}
                {{-- <div class="contact__capcha">
                    <div class="g-recaptcha" data-sitekey="your_site_key"></div>
                    <br/>
                </div> --}}
                
                {{-- <button type="button" class="contact__btn" wire:click="store"><i class="fa fa-save"></i>ENVIAR</button> --}}
                {{-- <button type="submit" class="contact__btn" ><i class="fa fa-save"> </i> ENVIAR </button>
            </div>
        </div> --}}
    
    