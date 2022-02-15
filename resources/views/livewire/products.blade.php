
<div class="request_titlenav">
    <label class="title">INICIO|PRESUPUESTO</label>
</div>
@if (Auth::check())
<div>
    <br>
    <div class="row justify-content-center">
        <div class="form-group col-md-3">
            <input type="text" placeholder="Buscar" class="form-control" wire:model="search"">
        </div>
        <button class="btn btn-outline-primary col-md-1" wire:click="$toggle('imputActive')"><i class="fa fa-plus"></i>Agregar</button>
    </div><br><br>
    @if($imputActive or $updateMode)
        <div class="row justify-content-center">
            <div class="col-md-3">
                <label>Nombre de Producto</label>
                <input type="text" placeholder="Nombre de Producto" class="form-control" wire:model.defer="name" style="margin-right:5px;">
                <input type="hidden" wire:model.defer="product_id">
            </div>
            <div class="col-md-3">
                <label>Descripcion</label>
                <input type="text" placeholder="Descripcion" class="form-control" wire:model.defer="description" style="margin-right:5px;">
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Cargar imagen de Producto</label>
                    <select required oninput="setCustomValidity('')" oninvalid="this.setCustomValidity('Requerido')" class="form-control" id="opcion" name="opcion" onchange="seleccionado()"tabindex="1">
                        <option value="no">Sin Imagen</option>
                        <option value="img">Imagen desde mi Equipo</option>
                        <option value="url">Url</option>
                    </select>
                </div>
            </div>
            <div class="form-group col-md-4" id="img" style="display:none;">
                <label for="" class="form-label">Logo</label>
                <input id="img_product" name="img_product" type="file" value="{{old('img_product')}}" class="form-control" tabindex="1">        
            </div>
            <div class="form-group col-md-4" id="url" style="display:none;">
                <label for="" class="form-label">Logo Url</label>
                <input id="img_product" name="img_product" type="text" value="{{old('url')}}" class="form-control" tabindex="1">
            </div>
        </div>
        <br>
        <div class="row justify-content-center">  
            <button type="button" class="btn btn-success col-md-1" wire:click="save"><i class="fa fa-save"></i>Guardar</button>
            <button type="button" class="btn btn-danger col-md-1" wire:click="resetInput"><i class="fa fa-trash"></i>Cancelar</button>
        </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-10">
            <table class="table table-striped">
                <thead class="table__header">
                    <tr>
                        <th></th>
                        <th>Producto</th>
                        <th>Descripcion</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($data as $producto)
                    <tr>
                        <td></td>
                        <td>
                            <span class="td__title">{{ $producto->name }}</span>
                        </td>
                        <td class="align-middle">
                            <span class="align-middle">{{ $producto->description }}</span>
                        </td>
                        <td>
                            <div >
                            <a wire:click="edit({{ $producto->id }})"><i class="fa fa-pen" style="color:#006400"></i></a>
                            <span></span>
                            <a wire:click="destroy({{ $producto->id }})"><i class="fa fa-trash" style="color:#C11D1D"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endif
@guest
<div class="container">
    <div class="row">
        <div class="products__card">
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
                    <img src="/img/mallas.png">
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
    </div>
</div>
@endguest
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
<script>
    function seleccionado(){
        var opt = $('#opcion').val();
        
        // alert(opt);
        if(opt=="img"){
            $('#img').show();
            $('#url').hide();
            
        }else{
            if(opt=="url"){
                $('#img').hide();
                $('#url').show();
                
            }else{
                $('#img').hide();
                $('#url').hide();
                
            }
        }
    }
</script>
<script>
    $(document).on('change','input[type="file"]',function(){
        // this.files[0].size recupera el tamaño del archivo
        // alert(this.files[0].size);
        
        var fileName = this.files[0].name;
        var fileSize = this.files[0].size;

        if(fileSize > 2000000){
            alert('El archivo no debe superar los 2MB');
            this.value = '';
            this.files[0].name = '';
        }else{
            // recuperamos la extensión del archivo
            var ext = fileName.split('.').pop();
            
            // Convertimos en minúscula porque 
            // la extensión del archivo puede estar en mayúscula
            ext = ext.toLowerCase();
        
            // console.log(ext);
            switch (ext) {
                case 'jpg':
                case 'jpeg':
                case 'png':
                case 'pdf': break;
                default:
                    alert('El archivo no tiene la extensión adecuada');
                    this.value = ''; // reset del valor
                    this.files[0].name = '';
            }
        }
    });
</script>