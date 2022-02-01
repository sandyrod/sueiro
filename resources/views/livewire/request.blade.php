<div class="">
    <div class="request_titlenav">
        <div class="row request align-items-center" style="height: 39px;">
            <div class="col-md-12">
                <span class="ubication"><strong>Inicio</strong> | Solicitud de presupuesto</span>
            </div>
        </div>
    </div>
    <div class="request" style="margin-left: -12px; margin-top: 10px;">
        <div class="row align-items-center">
            <div class="col-md-1">
                <i class="fa fa-edit request_icon"></i>
            </div>
            <div class="col-md-11">
                <span class="request_title">DATOS PERSONALES</span>
            </div>
        </div>
        <div class="row mt10">
            <div class="col-md-6">
                <input class="request_input" placeholder="ingresar nombre *">
            </div>
            <div class="col-md-6">
                <input class="request_input" placeholder="ingrese su correo electronico *">
            </div>
        </div>
        <div class="row  mt10">
            <div class="col-md-6">
                <input class="request_input" placeholder="Datos adicionales *">
            </div>
            <div class="col-md-6">
                <input class="request_input" placeholder="Empresa *">
            </div>
        </div>
    </div>
    <div class="request" style="margin-left: -12px; margin-top: 10px;">
        <div class="row align-items-center">
            <div class="col-md-1">
                <i class="fa fa-comments request_icon"></i>
            </div>
            <div class="col-md-11">
                <span class="request_title">Consulta</span>
            </div>
        </div>
        <div class="row mt10">
            <div class="col-md-6">
                <select class="request__selectproduct">
                    <option selected>Producto</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>

            </div>
            <div class="col-md-6">
                <input class="form-control" type="file" id="formFile">
            </div>
        </div>
        <div class="row mt10 align-items-end" style="text-align:right;">
            <div class="col-md-6">
                <textarea class="request__datos"  placeholder="Datos adicionales">
                </textarea>
            </div>
            <div class="col-md-6">
                <button class="request__btnsend">
                    <span class="request__textbtn">ENVIAR CONSULTA</span>
                </button>

            </div>
        </div>
    </div>
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