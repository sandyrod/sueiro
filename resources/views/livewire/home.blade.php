<div class="carrusel">
        <img src="/img/carrusel.png" class="carrusel_img">
        <div class="carrusel_title">
            <span>SUEIRO E HIJOS</span>
        </div>
        <div class="carrusel_subtitle">
            <span>Somos una empresa dedicada a proporcionar las mejores soluciones de filtración con 30 años de experiencia en el rubro.</span>
        </div>
        <div class="carousel-indicators">
            <button></button>
            <button></button>
            <button></button>
        </div>
    </div>
<div style="position:relative; display:block; border: solid 1px white;">
    <div class="products__card products__card-home">
        <div class="filtros"> 
            <div class="card" style="width: 18rem;">
                <img src="/img/filtros.png">
                <div class="card-body">
                    <p class="card_title">FILTROS</p>
                </div>
            </div>
        </div>
        <div class="filtros"> 
            <div class="card" style="width: 18rem;">
                <img src="/img/mallas.png"">
                <div class="card-body">
                    <p class="card_title">MALLAS</p>
                </div>
            </div>
        </div>
        <div class="filtros"> 
            <div class="card" style="width: 18rem;">
                <img src="/img/zarandas.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card_title">ZARANDAS</p>
                </div>
            </div>
        </div>
        <div class="filtros"> 
            <div class="card" style="width: 18rem;">
                <img src="/img/tamices.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card_title">TAMICES</p>
                </div>
            </div>
        </div>
    </div>
    <div style="position:relative;top: 50px; display:flex; margin-bottom:100px;">
        <div class="flt">
            <img class="flt_img" src="/img/flt.png">
        </div>
        <div class="cuerpo">
            <span class="cuerpo_title">SUEIRO E HIJOS</span>
            <br><br>
            <span class="cuerpo_subtitle">Es una empresa dedicada a proporcionar soluciones de
            filtrado, contando con más de 30 años de experiencia en 
            el rubro suministrando al mercado con un amplio surtido 
            de productos.</span>

            <button class="flt__btn">MÁS INFORMACIÓN</button>
        </div>
        
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
</div>
