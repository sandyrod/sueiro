@if (Auth::check())
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
@endif

<div>
    <div class="row ">
        <div class="form-group" style="float:left;">
            <input type="text" placeholder="Buscar" class="form-control" wire:model="search" style="width:500px; margin-right:5px;">
        </div>
            <button class="btn" wire:click="$toggle('imputActive')"><i class="fa fa-plus"></i>Agregar</button>
    </div>
   {{--  @if($imputActive or $updateMode) --}}
        <div class="row">
            <div class="col-md-3">
                <label>Nombre de category</label>
                <input type="text" placeholder="Nombre de category" class="form-control" wire:model.defer="name" style="margin-right:5px;">
                <input type="hidden" wire:model.defer="category_id">
            </div>
            <div class="col-md-3">
                <label>Descripcion</label>
                <input type="text" placeholder="Descripcion" class="form-control" wire:model.defer="description" style="margin-right:5px;">
            </div>
            <div class="col-sm-3">
                <label>Categoria Padre</label>
                <select class="form-control" wire:model.defer="category_id">
                    <option value="0">Categoria Padre</option>
                   {{--  @foreach ($data as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach --}}
                </select>
            </div>
        </div>
        <br>
        <div class="row justify-content-center ">
            <button class="btn " wire:click="save">
                <i class="fa fa-save"></i>Guardar
            </button>
            <button class="btn " wire:click="resetInput">
                <i class="fa fa-trash"></i>Cancelar
            </button>
        </div>
    {{-- @endif --}}
    <div class="row">
        <table class="table table-striped">
            <thead class="table__header">
                <tr>
                    <th></th>
                    <th>Categoria</th>
                    <th>Descripcion</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            {{--     @foreach($data as $categorias)
                <tr>
                    <td></td>
                    <td>
                        <span class="td__title">{{ $categorias->name }}</span>
                    </td>
                    <td class="align-middle">
                        <span class="align-middle">{{ $categorias->description }}</span>
                    </td>
                    <td>
                        <div >
                        <a wire:click="edit({{ $categorias->id }})"><i class="fa fa-pen" style="color:#006400">editar</i></a>
                        <span></span>
                        <a wire:click="destroy({{ $categorias->id }})"><i class="fa fa-trash" style="color:#C11D1D">eliminar</i></a>
                        </div>
                    </td>
                </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>
</div>


