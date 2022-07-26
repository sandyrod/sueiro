<div>
    <div class="container">
        <div class="cont_favorite">
            <div class="row">
                <div class="col-sm-3">
                    <p style="margin-top: 20px;
                    margin-left: 110px;
                    width: 176px;
                    height: 30px;
                    color:#c1282d;
                    opacity: 10;
                    font-size:22px;
                    font-weight: 900;
                    "> <i class="fas fa-star"></i> Mis Favoritos</p>
                </div>
                <div class="col-sm-1">
                    <p style="margin-top: 23px;
                    width: 146px;
                    height: 30px;
                    opacity: 10;
                    font-size:18px;
                    font-weight: 900;
                    ">ordenar por</p>
                    
                </div>
                <div class="col-sm-4">
                    <select style="color: #c1282d;margin-top: 26px;">
                        <option>Ult Guardado</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <div class="input-group flex-nowrap" style="margin-top: 18px;"> 
                        <input type="text" class="form-control" placeholder="Buscar por nombre del producto ..." aria-label="Username" aria-describedby="addon-wrapping">
                        <span class="input-group-text" id="addon-wrapping"><i class="fas fa-search" ></i></span>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="col-md-11">
                    <div class="table-responsive">
                        <table class="table">
                            <thead style="background:#33333370;color:#FFFFFF;text-align:center;">
                                <tr>
                                    <th scope="col"><i class="fas fa-cart-plus"></i></th>
                                    <th scope="col">Producto </th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Precio Unidad</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Eliminar</th>
                                    <th scope="col">Agregar</th>
                                    <th scope="col">Ver</th>
                                </tr>
                            </thead>
                            <tbody style="text-align:center;">
                                <tr>
                                    <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                                    <td>
                                        <img class="shp" src="/img/mallas.png"><br>
                                        <span style="margin: 10% 5%; color:#C11D1D">Malla Especial</span>
                                    </td>
                                    <td><input type="number" class="form-control" placeholder="0" min="1"  name='order_quantity' oninput="validity.valid||(value='');" wire:model.defer="order_quantity" id='order_quantity'></td> 
                                    <td>29,3</td>
                                    <td>29,3</td>
                                    <td><i class="fa fa-trash" style="color:#C11D1D"></i></td>
                                    <td><i class="fas fa-cart-plus" style="color:#C11D1D"></td>
                                    <td><i class="fas fa-eye" style="color:#C11D1D"></i></td>
                                </tr>
                                <tr>
                                    <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                                    <td>
                                        <img class="shp" src="/img/mallas.png"><br>
                                        <span style="margin: 10% 5%; color:#C11D1D">Planos / Discos</span>
                                    </td>
                                    <td><input type="number" class="form-control" placeholder="0" min="1"  name='order_quantity' oninput="validity.valid||(value='');" wire:model.defer="order_quantity" id='order_quantity'></td> 
                                    <td>29,3</td>
                                    <td>29,3</td>
                                    <td><i class="fa fa-trash" style="color:#C11D1D"></i></td>
                                    <td><i class="fas fa-cart-plus" style="color:#C11D1D"></td>
                                    <td><i class="fas fa-eye" style="color:#C11D1D"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
