
<div>
    <div class="request_titlenav">
        <div class="row request align-items-center" style="height: 39px;">
            <div class="col-md-12">
                <span class="ubication"><strong>Inicio</strong> | Producto</span>
            </div>
        </div>
    </div>
    @if (Auth::check())        
        <div>
            <br>
            <div class="row justify-content-center">
                <div class="form-group col-md-3">
                    <input type="text" placeholder="Buscar" class="form-control" wire:model="search"">
                </div>
                @if (auth()->user()->rol_user=='admin')
                    <button class="btn btn-outline-primary col-md-1" wire:click="$toggle('imputActive')"><i class="fa fa-plus"></i>Agregar</button>
                @endif
            </div><br><br>
            @if($imputActive or $updateMode)
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <label>Nombre de Producto</label>
                        <input type="text" placeholder="Nombre de Producto" class="form-control" wire:model.defer="name" style="margin-right:5px;">
                        <input type="hidden" wire:model.defer="product_id">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <label>Descripcion</label>
                        <textarea placeholder="Descripcion" class="form-control" wire:model.defer="description">
                        </textarea>
                    </div>
                </div>
                <div class="row justify-content-center">
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
                        <input id="logo" name="logo" type="file" value="{{old('img_product')}}" class="form-control" tabindex="1">        
                    </div>
                    <div class="form-group col-md-4" id="url" style="display:none;">
                        <label for="" class="form-label">Logo Url</label>
                        <input id="logo" name="logo" type="text" value="{{old('url')}}" class="form-control" tabindex="1">
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
                        <thead style="background:#C1282D;color:#FFFFFF;text-align:center;">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Producto</th>
                                <th scope="col">Descripcion </th>
                                <th scope="col">Precio </th>
                                <th scope="col">Cantidad </th>
                                <th scope="col">opciones</th>
                            </tr>
                        </thead>
                        <tbody style="text-align:center;">
                        @foreach($data as $producto)
                            <tr>
                                <td></td>
                                <td>
                                    <span class="td__title">{{ $producto->name }}</span>
                                </td>
                                <td class="align-middle">
                                    <span class="align-middle">{{ $producto->description }}</span>
                                </td>
                                <td class="align-middle">
                                    <span class="align-middle">{{ $producto->price }}</span>
                                </td>
                                <td class="align-middle">
                                    <input type="number" class="form-control" placeholder="0" min="1"  name='order_quantity' oninput="validity.valid||(value='');" wire:model.defer="order_quantity" id='order_quantity'>
                                </td>
                                <td>
                                    @if (auth()->user()->rol_user=='')
                                        <div><br>
                                            <a wire:click="addToCart({{ $producto->id }})" class="fas fa-shopping-cart"></a>
                                        </div>
                                    @endif
                                    @if (auth()->user()->rol_user=='admin')
                                        <div><br>
                                            <a wire:click="edit({{ $producto->id }})"><i class="fa fa-pen" style="color:#006400"></i></a>
                                            <a wire:click="destroy({{ $producto->id }})"><i class="fa fa-trash" style="color:#C11D1D"></i></a>
                                            <a wire:click="addToCart({{ $producto->id }})" class="fas fa-shopping-cart"></a>
                                        </div>
                                    @endif
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
        <div class="row justify-content-center">
            <div class="col-md-10">
                <table class="table table-striped">
                    <thead style="background:#C1282D;color:#FFFFFF;text-align:center;">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Producto</th>
                            <th scope="col">Descripcion </th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody style="text-align:center;">
                       @foreach($data as $producto)
                        <tr>
                            <td></td>
                            <td>
                                <span class="td__title">{{ $producto->name }}</span>
                            </td>
                            <td class="align-middle">
                                <span class="align-middle">{{ $producto->description }}</span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endguest
</div>
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
        // this.files[0].size recupera el tama??o del archivo
        // alert(this.files[0].size);
        
        var fileName = this.files[0].name;
        var fileSize = this.files[0].size;

        if(fileSize > 2000000){
            alert('El archivo no debe superar los 2MB');
            this.value = '';
            this.files[0].name = '';
        }else{
            // recuperamos la extensi??n del archivo
            var ext = fileName.split('.').pop();
            
            // Convertimos en min??scula porque 
            // la extensi??n del archivo puede estar en may??scula
            ext = ext.toLowerCase();
        
            // console.log(ext);
            switch (ext) {
                case 'jpg':
                case 'jpeg':
                case 'png':
                case 'pdf': break;
                default:
                    alert('El archivo no tiene la extensi??n adecuada');
                    this.value = ''; // reset del valor
                    this.files[0].name = '';
            }
        }
    });
</script>