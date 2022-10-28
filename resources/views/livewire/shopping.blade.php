<div>
    <div style="width: 100%; height:160%; position: relative;">
        <div class="shopping__cuerpo">
            <div class="shopping__cuerpomenu">
                <span class="tablinks"  onclick="openCity(event, 'Productos')" id="defaultOpen">Mis Productos</span>
                <span class="tablinks1" onclick="openCity(event, 'Entrega')">Entrega</span>
                <span class="tablinks2" onclick="openCity(event, 'Pago')">Pago</span>
                <span class="tablinks3" onclick="openCity(event, 'Confirmación')">Confirmación</span>
            </div>
            @if(session()->has('message'))
                <div class="alert" id="alert">
                    <div class="alert alert-success" style="width: 23%; margin-left:77%">
                        {{ session()->get('message') }}
                    </div>
                </div>
            @endif
            <div class="shopping__content">
                <div id="Productos" class="tabcontent">
                    <table class="table">
                        <thead style="background:#33333370;color:#FFFFFF;text-align:center;">
                            <tr>
                                <th scope="col"><i class="fas fa-cart-plus"></i></th>
                                <th scope="col">Producto </th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Precio Unidad</th>
                                <th scope="col">Total</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody style="text-align:center;">
                            @foreach($data as $producto)
                                <tr>
                                    <td><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                                    <td>
                                        <img class="shp" src="{{ asset('/img/mallas.png') }}"><br>
                                        <span style="margin: 10% 5%">{{ $producto->name }}</span>
                                    </td>
                                    <td>{{ $producto->order_quantity }}</td> 
                                    <td>USD {{ $producto->price }}</td>
                                    <td>USD {{ ($producto->order_quantity)*($producto->price) }} </td>
                                    <td><a wire:click="destroy({{ $producto->id }})"><i class="fas fa-trash-alt" style="color:#C11D1D"></i></a>
                                </tr>
                            @endforeach                        
                        </tbody>
                    </table>
                    <div class="container">
                        <button onclick="openCity(event, 'Entrega')" type="button" class="btn btn-outline-primary" style="margin-left:50%;"> Siguiente</button>
                        <div style="width:240px; margin-left:78%;" class="row align-items-end">
                            <div class="col">
                                @foreach($sub_total as $sub)
                                        Subtotal: USD<span style="color:#c1282d;">{{$sub->total}}</span>
                                @endforeach          
                            </div>
                        </div>
                    </div>
                    <div class="shp__di">
                        <span class="shp__dicon"><i class="fas fa-comment-alt"></i></span>
                        <span class="shp__dititle">Observaciones</span>
                    </div> 
                    <div class="shp__obse">
                        <span class="shp__obsetitle">Orden de compra / Usuario</span>
                        <br><br>
                        <input class="shp__obseimput" type="text" value="" id="flexCheckDefault">
                        <input type="file" wire:model="photo">
                        <br>
                        <br>
                        <span class="shp__obsetext">Comentarios</span>
                        <br><br>
                        <textarea class="shp__obsetexttarea" placeholder="Mensaje"></textarea>
                    </div>
                    <div class="shp__rsmcom">
                        <!-- Este es el que funciona -->
                        <div class="sticky-sm-top">
                            <div class="shp__fontitle">
                                <span class="shp__title">Resumen Compra</span>
                            </div>
                            <div class="shp__cuerpo">
                                <div class="shp__cuerporigth">
                                    <span class="shp__cuerpo--envrigthttitle">Total Items</span>
                                    <br>
                                    <span class="shp__cuerporigth__subtitle">Subtotal</span>
                                </div>
                                <div  class="shp__cuerpoleft">
                                    @foreach($count_item as $item)
                                        <span class="shp__cuerpolefttitle">{{$item->cantidad}}</span>
                                    @endforeach
                                    <br>
                                    @foreach($sub_total as $sub)    
                                        <span class="shp__cuerpoleftsubtitle">USD {{$sub->total}}$</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="shp__cuerpo--env">
                                <div class="shp__cuerpo--envrigth">
                                    <span class="shp__cuerpo--envrigthttitle">Envio</span>
                                </div>
                                <div class="shp__cuerpo--envleft">
                                    <span class="shp__cuerpo--envlefttitle">A definir.</span>
                                </div>
                            </div>
                            <div class="shp__cuerpoiv" >
                                <div class="shp__cuerpo--envrigth">
                                    <span class="shp__cuerpo--envrigthttitle" style="">IVA(21%)</span>
                                    <br>
                                    <span class="shp__cuerpo--envrigthttitle" style="">Otros impuestos</span>
                                    <br><br>
                                    <span class="shp__cuerpo--envrigthttitle">Total</span>
                                    <br>
                                    <span class="shp__cuerpo--envrigthttitle">Total en ARS</span>
                                </div>
                                <div style="" class="shp__cuerpo--envleft">
                                    <span class="shp__cuerpo--envlefttitle">{{$sub->total*0.21}}$</span>
                                    <br>
                                    <span class="shp__cuerpo--envlefttitle">No aplica.</span>
                                    <br>
                                    @foreach($sub_total as $sub)    
                                        <br><span class="" style="width:85%; margin-left:40%;">USD {{($sub->total*0.21)+($sub->total)}}$</span>
                                    @endforeach
                                    <br>
                                    <span class="" style="width:95%; margin-left:30%; ">ARS {{($sub->total*0.21)+($sub->total)*($dolar)}}$</span>
                                </div>
                            </div>
                            <div class="shp__cuerpoend">
                                <button type="button" wire:click="reset_cart" class="btn btn-outline-danger"><i class="far fa-star"></i> Vaciar Carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Entrega" class="tabcontent">
                    <div class="shp__encont">
                        <div class="shp__en">
                            <span class="shp__enicon"><i class="fas fa-shipping-fast"></i></span>
                            <span class="shp__entitle">Forma de Entrega</span>
                        </div>
                        <div class="title_entrega">
                            <div class="row align-items-start">
                                <div class="col-4">
                                    <span class="shp__etrtitle">Seleccione la forma de entrega</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="shp__etrcue">
                                    <span class="shp__etrtitleret">Retiro en sucursal</span>
                                    <input style="margin:11% 5%;" class="form-check-input" wire:model.defer="tipo_envio" type="radio" value="1" name="flexRadioenvio" id="retiro_sucursal" checked onchange="javascript:toggleText(1)">
                                </div>
                                <div>
                                    <span><b>Sucursal Ciudadela</b></span>                                
                                    <span>Bergamini 1127 - Ciudadela</span>
                                    <span>54-11 4488-4649 / 3825</span>
                                    <span>Lu a Vie de 8 a 17 hrs</span>
                                </div>
                                <div class="shp__etrcue1">
                                        <span class="shp__etrtitleret">Envío a domicilio</span>
                                        <input style="margin:11% 5%;" class="form-check-input" wire:model.defer="tipo_envio" type="radio" value="2" id="envio_domicilio" name="flexRadioenvio" onchange="javascript:toggleText(2)">
                                </div>
                            </div>
                            <div class="col-8">
                                <div>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.143550548068!2d-58.53818750000001!3d-34.6258125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7c77ca45177ec70b!2s48Q39FF6%2BMP!5e0!3m2!1ses-419!2sve!4v1643913947570!5m2!1ses-419!2sve" width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                                <div>
                                    <div id="Myid" style="display:none">
                                        Dirección Final
                                        <input class="form-control" placeholder="Dirección final de la mercancia" wire:model.defer="direccion">
                                        Telefono
                                        <input class="form-control" placeholder="Teléfono" wire:model.defer="telefono">
                                        Transporte
                                        <input class="form-control" placeholder="Empresa de Transporte" wire:model.defer="transporte">
                                        Dirección del Transporte
                                        <input class="form-control" placeholder="Dirección del Transporte" wire:model.defer="dirtransporte">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div>
                            <div class="row align-items-start">
                                <div class="col-4">
                                    <div class="shp__etrcue">
                                        <span class="shp__etrtitleret">Retiro en sucursal</span>
                                        <input style="margin:11% 5%;" class="form-check-input" wire:model.defer="tipo_envio" type="radio" value="1" name="flexRadioenvio" id="retiro_sucursal" checked>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.143550548068!2d-58.53818750000001!3d-34.6258125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7c77ca45177ec70b!2s48Q39FF6%2BMP!5e0!3m2!1ses-419!2sve!4v1643913947570!5m2!1ses-419!2sve" width="520" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row align-items-start">
                                <div style="margin-left: 10px;" class="col-4">
                                    <span><b>Sucursal Ciudadela</b></span>                                
                                    <span>Bergamini 1127 - Ciudadela</span>
                                    <span>54-11 4488-4649 / 3825</span>
                                    <span>Lu a Vie de 8 a 17 hrs</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row align-items-start">
                                <div class="col-4">
                                    <div class="shp__etrcue1">
                                        <span class="shp__etrtitleret">Envío a domicilio</span>
                                        <input style="margin:11% 5%;" class="form-check-input" wire:model.defer="tipo_envio" type="radio" value="2" id="envio_domicilio" name="flexRadioenvio" onchange="javascript:toggleText() " checked>
                                    </div>
                                </div>
                                <div class="col-8">
                                    <div id="Myid" style="display:none">
                                    Dirección Final
                                    <input class="form-control" placeholder="Dirección" wire:model.defer="direccion">
                                    Telefono
                                    <input class="form-control" placeholder="Telefono" wire:model.defer="telefono">
                                    Transporte
                                    <input class="form-control" placeholder="Transporte" wire:model.defer="transporte">
                                    Direción del Transporte
                                    <input class="form-control" placeholder="Transporte" wire:model.defer="transporte">
                                    </div>
                                </div>    
                            </div>
                        </div> -->
                        <!-- 
                        <div class="container">
                            <div class="row align-items-start">
                                <div class="col">
                                    <div class="shp__etrcue1">
                                        <span class="shp__etrtitleret">Envío a domicilio</span>
                                        <input style="margin:11% 5%;" class="form-check-input" wire:model.defer="tipo_envio" type="radio" value="2" id="envio_domicilio" name="flexRadioenvio" onchange="javascript:toggleText() " checked>
                                    </div>
                                </div>
                                <div class="col">
                                    <div id="Myid" style="display:none">
                                    Dirección Final
                                    <input class="form-control" placeholder="Dirección" wire:model.defer="direccion">
                                    Telefono
                                    <input class="form-control" placeholder="Telefono" wire:model.defer="telefono">
                                    Transporte
                                    <input class="form-control" placeholder="Transporte" wire:model.defer="transporte">
                                    Direción del Transporte
                                    <input class="form-control" placeholder="Transporte" wire:model.defer="transporte">
                                    </div>
                                </div>    
                            </div>
                        </div> -->
                        <br>
                        <button onclick="openCity(event, 'Pago')" type="button" class="btn btn-outline-primary" style="margin-left:50%;"> Siguiente</button>
                    </div>
                    <!-- <div class="shp__etrcon3" style="margin-top:7%">
                        <div class="shp__etrdiv">
                            <div class="shp__di">
                                <span class="shp__dicon"><i class="fas fa-comment-alt"></i></span>
                                <span class="shp__dititle">Observaciones</span>
                            </div>
                        </div>
                        <div class="shp__etrobs">
                            <span class="shp__obsetitle">Orden de compra / Usuario</span>
                            <input class="shp__etrobsinput" type="text" placeholder="N de orden o Usuario registrado">
                            <br><br>
                            <span class="shp__obsetext">Comentarios</span>
                            <textarea class="shp__etrobstext" placeholder="Observaciones/Sugerencias"></textarea>
                        </div>
                    </div> -->
                    <div class="shp__rsmcom">
                    <div class="sticky-sm-top">
                            <div class="shp__fontitle">
                                <span class="shp__title">Resumen Compra</span>
                            </div>
                            <div class="shp__cuerpo">
                                <div class="shp__cuerporigth">
                                    <span class="shp__cuerpo--envrigthttitle">Total Items</span>
                                    <br>
                                    <span class="shp__cuerporigth__subtitle">Subtotal</span>
                                </div>
                                <div  class="shp__cuerpoleft">
                                    @foreach($count_item as $item)
                                        <span class="shp__cuerpolefttitle">{{$item->cantidad}}</span>
                                    @endforeach
                                    <br>
                                    @foreach($sub_total as $sub)    
                                        <span class="shp__cuerpoleftsubtitle">USD {{$sub->total}}$</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="shp__cuerpo--env">
                                <div class="shp__cuerpo--envrigth">
                                    <span class="shp__cuerpo--envrigthttitle">Envio</span>
                                </div>
                                <div class="shp__cuerpo--envleft">
                                    <span class="shp__cuerpo--envlefttitle">A definir.</span>
                                </div>
                            </div>
                            <div class="shp__cuerpoiv" >
                                <div class="shp__cuerpo--envrigth">
                                    <span class="shp__cuerpo--envrigthttitle" style="">IVA(21%)</span>
                                    <br>
                                    <span class="shp__cuerpo--envrigthttitle" style="">Otros impuestos</span>
                                    <br><br>
                                    <span class="shp__cuerpo--envrigthttitle">Total</span>
                                    <br>
                                    <span class="shp__cuerpo--envrigthttitle">Total en ARS</span>
                                </div>
                                <div style="" class="shp__cuerpo--envleft">
                                    <span class="shp__cuerpo--envlefttitle">{{$sub->total*0.21}}$</span>
                                    <br>
                                    <span class="shp__cuerpo--envlefttitle">No aplica.</span>
                                    <br>
                                    @foreach($sub_total as $sub)    
                                        <br><span class="" style="width:85%; margin-left:40%;">USD {{($sub->total*0.21)+($sub->total)}}$</span>
                                    @endforeach
                                    <br>
                                    <span class="" style="width:95%; margin-left:30%; ">ARS {{($sub->total*0.21)+($sub->total)*($dolar)}}$</span>
                                </div>
                            </div>
                            <div class="shp__cuerpoend">
                                <button type="button" wire:click="reset_cart" class="btn btn-outline-danger"><i class="far fa-star"></i> Vaciar Carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Pago" class="tabcontent">
                    <div class="pago_tab">
                        <div class="shopping_pago">
                            <div class="shp__pg">
                                <span class="shp__enicon"><i class="fas fa-wallet"></i></span>
                                <span class="shp__entitle">Forma de Pago</span>
                            </div>
                            
                            <div class="btn_contado">
                                <span style="margin:1.5% 5%; position: absolute;">Contado</span>
                                <input style="margin:10% 7%;" class="form-check-input" type="radio" wire:model.defer="metodo_pago" onclick="toggle(this)" value="1" name="flexRadioDefault" id="flexRadioDefault1">
                            </div>
                            <div class="optn_pago">
                                <div id="uno" style="display:none">
                                    Monto<input class="form-control" placeholder="Monto" wire:model.defer="monto">
                                </div>
                                <div id="dos" style="display:none">
                                    Monto<input class="form-control" placeholder="Monto" wire:model.defer="monto">
                                    Referencia<input class="form-control" placeholder="Referencia" wire:model.defer="ref">
                                    Fecha<input class="form-control" placeholder="Fecha" wire:model.defer="fecha_pago">
                                </div>
                            </div>
                            <div class="btn_contado">
                                <span style="margin:1.5% 4.5%;position: absolute;"> Transferencia Bancaria</span>
                                <input style="margin:8% 5%;" class="form-check-input" type="radio" name="flexRadioDefault" wire:model.defer="metodo_pago" onclick="toggle(this)" value="2" id="flexRadioDefault2" checked>
                            </div>  
                            <div style="margin:-10px 35px;width: 229px;height: 55px;">
                                <span> SUEIRO E HIJOS </span>
                                <span>CBU: 0957541204574554</span>
                                <span>ALIAS: SUEIRO.E.HIJOS</span>
                            </div>
                        </div>
                        <div class="shopping_pago-note">
                            <div class="shopping_pago-note-title">
                                <span class="shp__entitle">IMPORTANTE</span>
                            </div>
                            <div>
                                <br>
                                <span>* Eligiendo la opción de pago en efectivo es necesario que se comunique vía whatsapp para coordinar el pago al momento de ser retirado el pedido.</span>
                                <br>
                                <span>* Eligiendo la opción de pago por transferencia es necesario presentar el comprobante al momento de retirar el pedido.</span>
                            </div>
                        </div>
                    </div>
                    <br>
                    <button onclick="openCity(event, 'Confirmación')" type="button" class="btn btn-outline-primary" style="margin-left:50%;"> Siguiente</button>
                    <!-- <div class="shp__etrcon3">
                        <div class="shp__etrdiv">
                            <div class="shp__di">
                                <span class="shp__dicon"><i class="fas fa-comment-alt"></i></span>
                                <span class="shp__dititle">Observaciones</span>
                            </div>
                        </div>
                        <div class="shp__etrobs">
                            <span class="shp__obsetitle">Orden de compra / Usuario</span>
                            <input class="shp__etrobsinput" type="text" placeholder="N de orden o Usuario registrado">
                            <br><br>
                            <span class="shp__obsetext">Comentarios</span>
                            <textarea class="shp__etrobstext" placeholder="Observaciones/Sugerencias"></textarea>
                        </div>
                    </div> -->
                    <div class="shp__rsmcom">
                    <div class="sticky-sm-top">
                            <div class="shp__fontitle">
                                <span class="shp__title">Resumen Compra</span>
                            </div>
                            <div class="shp__cuerpo">
                                <div class="shp__cuerporigth">
                                    <span class="shp__cuerpo--envrigthttitle">Total Items</span>
                                    <br>
                                    <span class="shp__cuerporigth__subtitle">Subtotal</span>
                                </div>
                                <div  class="shp__cuerpoleft">
                                    @foreach($count_item as $item)
                                        <span class="shp__cuerpolefttitle">{{$item->cantidad}}</span>
                                    @endforeach
                                    <br>
                                    @foreach($sub_total as $sub)    
                                        <span class="shp__cuerpoleftsubtitle">USD {{$sub->total}}$</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="shp__cuerpo--env">
                                <div class="shp__cuerpo--envrigth">
                                    <span class="shp__cuerpo--envrigthttitle">Envio</span>
                                </div>
                                <div class="shp__cuerpo--envleft">
                                    <span class="shp__cuerpo--envlefttitle">A definir.</span>
                                </div>
                            </div>
                            <div class="shp__cuerpoiv" >
                                <div class="shp__cuerpo--envrigth">
                                    <span class="shp__cuerpo--envrigthttitle" style="">IVA(21%)</span>
                                    <br>
                                    <span class="shp__cuerpo--envrigthttitle" style="">Otros impuestos</span>
                                    <br><br>
                                    <span class="shp__cuerpo--envrigthttitle">Total</span>
                                    <br>
                                    <span class="shp__cuerpo--envrigthttitle">Total en ARS</span>
                                </div>
                                <div style="" class="shp__cuerpo--envleft">
                                    <span class="shp__cuerpo--envlefttitle">{{$sub->total*0.21}}$</span>
                                    <br>
                                    <span class="shp__cuerpo--envlefttitle">No aplica.</span>
                                    <br>
                                    @foreach($sub_total as $sub)    
                                        <br><span class="" style="width:85%; margin-left:40%;">USD {{($sub->total*0.21)+($sub->total)}}$</span>
                                    @endforeach
                                    <br>
                                    <span class="" style="width:95%; margin-left:30%; ">ARS {{($sub->total*0.21)+($sub->total)*($dolar)}}$</span>
                                </div>
                            </div>
                            <div class="shp__cuerpoend">
                                <button type="button" wire:click="reset_cart" class="btn btn-outline-danger"><i class="far fa-star"></i> Vaciar Carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Confirmación" class="tabcontent">
                    <div>
                        <div style="top: 304px;left: 65px;height: 495px;background: #FFFFFF 0% 0% no-repeat padding-box;box-shadow: 0px 3px 6px #00000012;opacity: 1;">
                            <div class="shopping_confirmation_head">
                                <span class="icon"><i class="fas fa-cart-plus"></i></span>
                                <span class="title">IMPORTANTE</span>
                            </div>
                            <div class="row">
                                <div style="margin-left:2%;">
                                    <table>
                                        <br>
                                        <tr>
                                            <td class="shopping_first_col">Total Items</td>
                                            @foreach($count_item as $item)
                                                <td>{{$item->cantidad}}</td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>Subtotal</td>
                                            @foreach($sub_total as $sud)
                                                <td>USD {{$sud->total}}$</td>
                                            @endforeach
                                        </tr>
                                    </table>
                                </div>
                                <div style="margin-left:2%;">
                                    <table>
                                        <br>
                                        <tr>
                                        <td class="shopping_first_col">Envio</td>
                                        <td>A Definir.</td>
                                        </tr>
                                        {{-- <tr>
                                            <td>Bonificaciones</td>
                                            <td>No aplica.</td>
                                        </tr> --}}
                                        <tr>
                                            <td >IVA ( 21% )</td>
                                            <td>{{$sud->total*0.21}}$</td>
                                        </tr>
                                        <tr>
                                        <td>Otros impuestos</td>
                                        <td>No aplica.</td>
                                        </tr>
                                    </table>
                                </div>
                                <div style="margin-left:2%;">
                                    <table>
                                        <br>
                                        <tr>
                                            <td class="shopping_first_col">Total</td>
                                            @foreach($sub_total as $sud)      
                                                <td>USD {{($sud->total*0.21)+($sud->total)}}$</td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <td>Total en ARS</td>
                                            <br>
                                            <td>ARS {{($sud->total*0.21)+($sud->total)*($dolar)}}$</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="shopping_final_action">                                
                                    <button type="button" wire:click="reset_cart" class="btn btn-outline-danger"><i class="far fa-star"></i>Vaciar Carrito</button>
                                    <button type="button"  wire:click="save" class="btn btn-danger">Confirmar Compra</button>                
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="shopping_notes">
                            <div class="shopping_notes_title">
                                <span>IMPORTANTE</span>
                            </div>
                            <span>* Una vez confirmada la compra recibirá un email con el detalle.</span>
                            <span>* Para modificaciones o cancelaciones deberá comunicarse a nuestros teléfonos antes de las 72 hrs.</span>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
<script type="text/javascript">
    function showContent() {
        element = document.getElementById("content");
        check = document.getElementById("check");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
    }
</script>
<script type="text/javascript">
    function toggle(elemento) {
      if(elemento.value=="0") {
          document.getElementById("uno").style.display = "none";
          document.getElementById("dos").style.display = "none";
       }else{
           if(elemento.value=="1"){
               document.getElementById("uno").style.display = "block";
               document.getElementById("dos").style.display = "none";
           }else{
               if(elemento.value=="2"){
                    document.getElementById("uno").style.display = "none";
                    document.getElementById("dos").style.display = "block";
                }  
            }
        }
    }
</script>
<script>
    function toggleText(v){
      console.log(v);
      var x = document.getElementById("Myid");
      if (v==1) {
        x.style.display = "none";
      } else {
        x.style.display = "block";
        
      }
    }
</script>                      
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {        
        setTimeout(function() {
          $("#alerts").hide(6000);
          }, 3000);
        });
</script>
 --}}