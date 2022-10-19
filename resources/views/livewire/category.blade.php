<div>
    <div class="row justify-content-center" style="margin-top: 50px;">
        <div class="form-group col-md-3">
            <input type="text" placeholder="Buscar" class="form-control" wire:model="search"">
        </div>
        <button class="btn btn-outline-primary col-md-1" wire:click="$toggle('imputActive')"><i class="fa fa-plus"></i>Agregar</button>
    </div>
    <br><br>    
    @if($imputActive or $updateMode)
        <div class="row justify-content-center">
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
                    @foreach ($data as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">  
            <button type="button" class="btn btn-success col-md-1" wire:click="save"><i class="fa fa-save"></i>Guardar</button>
            <button type="button" class="btn btn-danger col-md-1" wire:click="resetInput"><i class="fa fa-trash"></i>Cancelar</button>
        </div>
    @endif
    <div class="row justify-content-center" style="margin-top 20px; margin-bottom: 30px;">
        <div class="col-md-10">
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
                    @foreach($data as $categorias)
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
                            <a wire:click="edit({{ $categorias->id }})"><i class="fa fa-pen" style="color:#006400"></i></a>
                            <span></span>
                            <a wire:click="destroy({{ $categorias->id }})"><i class="fa fa-trash" style="color:#C11D1D"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row justify-content-center" style="margin-top: 50px; margin-bottom: 100px;">
        <a href="{{ route('dashboard') }}" class="botonera" style="margin: 20px;">Dashboard</a>
    </div>
</div>

