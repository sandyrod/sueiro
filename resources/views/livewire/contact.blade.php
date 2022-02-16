<div class="request_titlenav">
    <div class="row request align-items-center" style="height: 39px;">
        <div class="col-md-12">
            <span class="ubication"><strong>Inicio</strong> | Contacto</span>
        </div>
    </div>
</div>
<div class="row">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.143550548068!2d-58.53818750000001!3d-34.6258125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7c77ca45177ec70b!2s48Q39FF6%2BMP!5e0!3m2!1ses-419!2sve!4v1643913947570!5m2!1ses-419!2sve" width="1349" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
    