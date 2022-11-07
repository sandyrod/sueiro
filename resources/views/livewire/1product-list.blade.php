<div class="request_titlenav">
    <div class="row request align-items-center">
        <div class="col-md-8">
            <span class="ubication"><strong>Inicio</strong> | Listado de Producto</span>
        </div>
    </div>
</div>
<div class="form-group col-md-3">
    <input type="text" placeholder="Buscar" class="form-control" wire:model="search">
</div>
<div class="container">
    <div class="row justify-content-center">
        <table class="table">
            <thead style="background:#33333370;color:#FFFFFF;text-align:center;">
                <tr>
                    <th scope="col">Producto </th>
                    <th scope="col">Descripción.</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>
            <tbody style="text-align:center;">
                @foreach($data as $producto)
                <tr>
                    <td>
                        <img class="shp" src="{{ asset('/img/mallas.png') }}"><br>
                        <span style="margin: 10% 5%">{{ $producto->name }}</span>
                    </td>
                    <td>{{ $producto->description }}</td>
                    <td><i style="color:red;" class="fas fa-cart-plus"></i></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
