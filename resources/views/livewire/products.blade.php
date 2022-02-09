@if (Auth::check())
<div>
    <div class="row justify-content-center">
        <div class="form-group col-md-3">
            <input type="text" placeholder="Buscar" class="form-control" wire:model="search"">
        </div>
        <button class="btn" wire:click="$toggle('imputActive')"><i class="fa fa-plus"></i>Agregar</button>
    </div>
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
            
        </div>
        <br>
        <div class="row justify-content-center">
            <button class="btn " wire:click="save">
                <i class="fa fa-save"></i>Guardar
            </button>
            <button class="btn " wire:click="resetInput">
                <i class="fa fa-trash"></i>Cancelar
            </button>
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
    <div class="row products__menu">
        INICIO|PRODUCTOS
    </div>
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
