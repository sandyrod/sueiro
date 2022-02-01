<div>
    <div class="row ">
        <div class="form-group" style="float:left;">
            <input type="text" placeholder="Buscar" class="form-control" wire:model="search" style="width:500px; margin-right:5px;">
        </div>
            <button class="btn" wire:click="$toggle('imputActive')"><i class="fa fa-plus"></i>Agregar</button>
    </div>
    @if($imputActive or $updateMode)
        <div class="row">
            <div class="col-md-3">
                <label>Nombre de category</label>
                <input type="text" placeholder="Nombre de category" class="form-control" wire:model.defer="name_category" style="margin-right:5px;">
                <input type="hidden" wire:model.defer="category_id">
            </div>
            <div class="col-md-3">
                <label>Descripcion</label>
                <input type="text" placeholder="Descripcion" class="form-control" wire:model.defer="description" style="margin-right:5px;">
            </div>
            <div class="col-sm-3">
                <label>Sub categoria</label>
                <select class="form-control" name="ciudad" id="ciudad">
                    <option>Categoria Padre</option>
                    @foreach ($categorias as $categori)
                        <option value="{{$categori->categoriy_id}}">{{$categori->name_category}}</option>
                    @endforeach
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
    @endif
    <div class="row">
        <table class="table table-striped">
            <thead class="table__header">
                <tr>
                    <th></th>
                    <th>category</th>
                    <th>description</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $categorias)
                <tr>
                    <td></td>
                    <td>
                        <span class="td__title">{{ $categorias->name_category }}</span>
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
                @endforeach
            </tbody>
        </table>
    </div>
</div>
