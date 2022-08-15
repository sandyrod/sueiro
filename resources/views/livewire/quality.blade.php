<form action="{{route('quality.store')}}" method="POST">
    @csrf
    {!! htmlFormSnippet() !!}
    <div>
        <div class="request_titlenav">
            <div class="row request align-items-center" style="height: 39px;">
                <div class="col-md-12">
                    <span class="ubication"><strong>Inicio</strong> | Certificado de Calidad</span>
                </div>
            </div>
        </div>
        {{ csrf_field() }}
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <br><span class="quality__title">CERTIFICADO DE CALIDAD</span>
                    </div>
                    <div>
                        <br><span class="quality__parrafo">Consulta Automática</span>
                    </div>
                    <div>
                        <span class="quality__sudparrafo">Ingrese el número de 5 dígitos grabado en el cuerpo del Producto.</span>
                    </div>
                    <div class="col-sm-8" >
                        <br><br><input class="quality__imput form-control" type="text" id="code" name="code" placeholder="|" >  
                    </div>
                    <div class="col-sm-8" >
                        <br><button type="submit" class="quality__btn">SOLICITAR CERTIFICADO</button><br><br>
                    </div>
                    <div class="col-sm-12 quality__lineseparate"></div>
                    <br><span class="quality__titlesepa" > Si usted tiene un problema para encontrar el número Grabado, haga click aquí.</span><br><br><br>
                </div>
                <div class="col-sm-5 col-md-5 col-lg-5">
                    <br><br><img src="/img/calidad.png" class="img-fluid"><br><br><br><br>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    $(document).ready(function () {
        $('input#code')
        .keypress(function (event) {
            if (event.which < 48 || event.which > 57 || this.value.length === 5) {
                return false;
            }
        });
    });    
</script>

                {{-- <div class="quality__body">
                    <div class="quality__cuerpo">
                        <span class="quality__title">CERTIFICADO DE CALIDAD</span>
                        <span class="quality__parrafo">Consulta Automática</span>
                        <span class="quality__sudparrafo">Ingrese el número de 5 dígitos grabado en el cuerpo del Producto.</span>
                        <input class="quality__imput" type="text" disabled placeholder="|">  
                        <button class="quality__btn">SOLICITAR CERTIFICADO</button>
                    </div>
                    <div class="quality__lineseparate"></div>
                        <span class="quality__titlesepa" > Si usted tiene un problema para encontrar el número Grabado, haga click aquí.</span>
                    <div class="quality__cuerpoimg">
                        <img class="flt_img" src="/img/calidad.png">
                    </div>
                </div> --}}
