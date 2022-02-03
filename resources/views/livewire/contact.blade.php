<div class="request">
    <span class="request__menu">Inicio | Contacto</span>
</div>
<div class="contact__map">
    <img class="flt_img" src="/img/map.png">
</div>
<div class="contact__redes">
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
</div>
<div class="contact__cuerpo">
    <input class="contact__imputname" placeholder="Nombre">
    <input class="contact__imputape" placeholder="Apellido">
    <input class="contact__imputmail" placeholder="Email">
    <input class="contact__imputempresa" placeholder="Empresa *">
    <textarea class="contact__texmsj" placeholder="Mensaje"></textarea>
    <div class="contact__terminos">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <span> Acepto los términos y condiciones de privacidad</span>
    </div>

    <div class="contact__capcha">
    </div>
    <button class="contact__btn">
        <span>ENVIAR</span>
    </button>
</div>
    <div class="footer">
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
                <form action="{{ route('suscribe') }}" method='post'>
                @csrf
                <input class="footer__input" placeholder="       Ingresa tu email" id="search" name="email" type="text" value="">
                <button class="footer__btn"><i style="position: absolute;top: 35%;left: 35%; color:#fff;" class="fas fa-paper-plane"></i></button>
                </form>
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
    </div>