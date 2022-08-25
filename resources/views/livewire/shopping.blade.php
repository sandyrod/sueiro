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
            <div class="shopping__sudcuerpo">
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
                                    <td>{{ $producto->price }}</td>
                                    <td> {{($producto->order_quantity)*($producto->price)}} </td>
                                    <td><a wire:click="destroy({{ $producto->id }})"><i class="fas fa-trash-alt" style="color:#C11D1D"></i></a>
                                </tr>
                            @endforeach                        
                        </tbody>
                    </table>
                    <div class="container">
                        <button onclick="openCity(event, 'Entrega')" type="button" class="btn btn-outline-primary" style="margin-left:50%;"> Siguiente</button>
                        <div style="width:140px; margin-left:88%;" class="row align-items-end">
                            <div class="col">
                                @foreach($sud_total as $sud)
                                    <tr style="height:5%; top:28%; left:80%; position:absolute;">
                                        <TD>Subtotal</TD>
                                        <TD style="color:#c1282d;">{{$sud->total}}</TD>
                                    </tr>
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
                        <br><br>
                        <span class="shp__obsetext">Comentarios</span>
                        <br><br>
                        <textarea class="shp__obsetexttarea" placeholder="Mensaje"></textarea>
                    </div>
                    <div class="shp__rsmcom">
                        <div class="sticky-sm-top">
                            <div class="shp__fontitle">
                                <span class="shp__title"> Resumen Compra</span>
                            </div>
                            <div class="shp__cuerpo">
                                <div class="shp__cuerporigth">
                                    <span class="shp__cuerporigth__title">Total Items</span>
                                    <span class="shp__cuerporigth__sudtitle">Subtotal</span>
                                </div>
                                <div  class="shp__cuerpoleft">
                                    @foreach($count_item as $item)
                                        <span class="shp__cuerpolefttitle">{{$item->cantidad}}</span>
                                    @endforeach
                                    @foreach($sud_total as $sud)    
                                        <span class="shp__cuerpoleftsudtitle">USD {{$sud->total}}$</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="shp__cuerpo--env">
                                <div class="shp__cuerpo--envrigth">
                                    <span class="shp__cuerpo--envrigthttitle">Envio</span>
                                    <br>
                                    {{-- <span class="shp__cuerpo--envrigthtsudtitle">Bonificaciones</span> --}}
                                </div>
                                <div class="shp__cuerpo--envleft">
                                    <span class="shp__cuerpo--envlefttitle">A definir.</span>
                                    <br>
                                    {{-- <span class="shp__cuerpo--envlefttitle">A definir.</span> --}}
                                </div>
                            </div>
                            <div class="shp__cuerpoiv" >
                                <div class="shp__cuerpo--envrigth">
                                    <span class="shp__cuerpo--envrigthttitle" style="margin-top: -10%;">IVA(21%)</span>
                                    <br>
                                    <span class="shp__cuerpo--envrigthttitle" style="margin-top: -10%;">Otros impuestos</span>
                                    <br>
                                    <span class="shp__cuerpo--envrigthttitle">Total</span>
                                    <br>
                                    <span class="shp__cuerpo--envrigthttitle">Total en ARS</span>
                                </div>
                                <div style="margin-top:-42%;" class="shp__cuerpo--envleft">
                                    <span class="shp__cuerpo--envlefttitle">{{$sud->total*0.21}}$</span>
                                    <br>
                                    <span class="shp__cuerpo--envlefttitle">No aplica.</span>
                                    <br>
                                    @foreach($sud_total as $sud)    
                                        <br><span class="" style="width:85%; margin-left:40%;">USD {{($sud->total*0.21)+($sud->total)}}$</span>
                                    @endforeach
                                    <br>
                                    <span class="" style="width:95%; margin-left:30%; ">ARS {{($sud->total*0.21)+($sud->total)*(112.53)}}$</span>
                                </div>
                            </div>
                            <div style="width:100%; height:15%;">
                                <div style="width:50%; height:25%;left:40%; position: absolute;">
                                    <br><br>
                                    <button type="button" wire:click="reset_cart" class="btn btn-outline-danger"><i class="far fa-star"></i> Vaciar Carrito</button>
                                </div>
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
                        <div class="container">
                            <div class="row align-items-start">
                                <div class="col">
                                    <span class="shp__etrtitle">Seleccione la forma de entrega</span>
                                    <br>
                                    <div class="shp__etrcue">
                                        <span class="shp__etrtitleret">Retiro en sucursal</span>
                                        <input style="margin:11% 5%;" class="form-check-input" wire:model.defer="tipo_envio" type="radio" value="1" name="flexRadioenvio" id="retiro_sucursal" checked>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row align-items-start">
                                <div style="max-width:25%; margin-left:6%; " class="col">
                                    <span><b>Sucursal Ciudadela</b></span>                                
                                    <span>Bergamini 1127 - Ciudadela</span>
                                    <span>54-11 4488-4649 / 3825</span>
                                    <span>Lu a Vie de 8 a 17 hrs</span>
                                </div>
                                <div style="margin-top: -5%" class="col">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.143550548068!2d-58.53818750000001!3d-34.6258125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7c77ca45177ec70b!2s48Q39FF6%2BMP!5e0!3m2!1ses-419!2sve!4v1643913947570!5m2!1ses-419!2sve" width="520" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
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
                                    Direccion  <input class="form-control" placeholder="Dirección" wire:model.defer="direccion">
                                    Telefono   <input class="form-control" placeholder="Telefono" wire:model.defer="telefono">
                                    </div>
                                </div>    
                            </div>
                        </div>
                        <br>
                        <button onclick="openCity(event, 'Pago')" type="button" class="btn btn-outline-primary" style="margin-left:50%;"> Siguiente</button>
                    </div>
                    <div class="shp__etrcon3" style="margin-top:7%">
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
                    </div>
                    <div class="shp__rsmcom">
                        <div class="sticky-sm-top">
                            <div class="shp__fontitle">
                                <span class="shp__title"> Resumen Compra</span>
                            </div>
                            <div class="shp__cuerpo">
                                <div class="shp__cuerporigth">
                                    <span class="shp__cuerporigth__title">Total Items</span>
                                    <span class="shp__cuerporigth__sudtitle">Subtotal</span>
                                </div>
                                <div  class="shp__cuerpoleft">
                                    @foreach($count_item as $item)
                                        <span class="shp__cuerpolefttitle">{{$item->cantidad}}</span>
                                    @endforeach
                                    @foreach($sud_total as $sud)    
                                        <span class="shp__cuerpoleftsudtitle">USD {{$sud->total}}$</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="shp__cuerpo--env">
                                <div class="shp__cuerpo--envrigth">
                                    <span class="shp__cuerpo--envrigthttitle">Envio</span>
                                    <br>
                                    {{-- <span class="shp__cuerpo--envrigthtsudtitle">Bonificaciones</span> --}}
                                </div>
                                <div class="shp__cuerpo--envleft">
                                    <span class="shp__cuerpo--envlefttitle">A definir.</span>
                                    <br>
                                    {{-- <span class="shp__cuerpo--envlefttitle">A definir.</span> --}}
                                </div>
                            </div>
                            <div class="shp__cuerpoiv" >
                                <div class="shp__cuerpo--envrigth">
                                    <span class="shp__cuerpo--envrigthttitle" style="margin-top: -10%;">IVA(21%)</span>
                                    <br>
                                    <span class="shp__cuerpo--envrigthttitle" style="margin-top: -10%;">Otros impuestos</span>
                                    <br>
                                    <span class="shp__cuerpo--envrigthttitle">Total</span>
                                    <br>
                                    <span class="shp__cuerpo--envrigthttitle">Total en ARS</span>
                                </div>
                                <div style="margin-top:-42%;" class="shp__cuerpo--envleft">
                                    <span class="shp__cuerpo--envlefttitle">{{$sud->total*0.21}}$</span>
                                    <br>
                                    <span class="shp__cuerpo--envlefttitle">No aplica.</span>
                                    <br>
                                    @foreach($sud_total as $sud)    
                                        <br><span class="" style="width:85%; margin-left:40%;" >USD {{($sud->total*0.21)+($sud->total)}}$</span>
                                    @endforeach
                                    <br>
                                    <span class="" style="width:95%; margin-left:30%; ">ARS {{($sud->total*0.21)+($sud->total)*(112.53)}}$</span>
                                </div>
                            </div>
                            <div style="width:100%; height:15%;">
                                <div style="width:50%; height:25%;left:40%; position: absolute;">
                                    <br><br>
                                    <button type="button" wire:click="reset_cart" class="btn btn-outline-danger"><i class="far fa-star"></i> Vaciar Carrito</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Pago" class="tabcontent">
                    <div class="row">
                        <div style="top: 306px;left: 65px;width: 473px;height: 325px;background: #FFFFFF 0% 0% no-repeat padding-box;box-shadow: 0px 3px 6px #00000012;opacity: 1;border:solid;">
                            <div class="shp__pg">
                                <span class="shp__enicon"><i class="fas fa-wallet"></i></span>
                                <span class="shp__entitle">Forma de Entrega</span>
                            </div>
                            
                            <div style="margin: 30px 35px;width: 171px;height: 55px;background: #FFFFFF 0% 0% no-repeat padding-box;border: 1px solid #A2A2A2;opacity: 1;">
                                
                                <span style="margin:1.5% 5%; position: absolute;"> Contado</span>
                                <input style="margin:10% 7%;" class="form-check-input" type="radio" wire:model.defer="metodo_pago" onclick="toggle(this)" value="1" name="flexRadioDefault" id="flexRadioDefault1">
                            </div>
                            <div style="margin: -10% 60%;width: 171px;height: 55px;background: #FFFFFF 0% 0% no-repeat padding-box;">
                                <div id="uno" style="display:none">
                                    Monto<input class="form-control" placeholder="Monto" wire:model.defer="monto">
                                </div>
                                <div id="dos" style="display:none">
                                    Monto<input class="form-control" placeholder="Monto" wire:model.defer="monto">
                                    Referencia<input class="form-control" placeholder="Referencia" wire:model.defer="ref">
                                    Fecha<input class="form-control" placeholder="Fecha" wire:model.defer="fecha_pago">
                                </div>
                            </div>
                            <div style="margin:30px 35px;width: 200px;height: 55px;border: 1px solid var(--unnamed-color-c1282d);background: #FFFFFF 0% 0% no-repeat padding-box;border: 1px solid #C1282D;opacity: 1;">
                                <span style="margin:1.5% 4.5%;position: absolute;"> Transferencia Bancaria</span>
                                <input style="margin:8% 5%;" class="form-check-input" type="radio" name="flexRadioDefault" wire:model.defer="metodo_pago" onclick="toggle(this)" value="2" id="flexRadioDefault2" checked>
                            </div>  
                            <div style="margin:-10px 35px;width: 229px;height: 55px;">
                                <span> SUEIRO E HIJOS </span>
                                <span>CBU: 0957541204574554</span>
                                <span>ALIAS: SUEIRO.E.HIJOS</span>
                            </div>
                        </div>
                        <div style="top: 30px;margin-left: 20px;width: 313px;height: 325px;background: #FFFFFF 0% 0% no-repeat padding-box;border: 1px solid #A2A2A28F;opacity: 1;border:solid;">
                            <div style="top: 306px;margin-left:-5%;width: 313px;height: 42px;background: var(--unnamed-color-c1282d) 0% 0% no-repeat padding-box;border: 1px solid var(--unnamed-color-c1282d);background: #C1282D 0% 0% no-repeat padding-box;border: 1px solid #C1282D;opacity: 1;">
                                <span style="margin-left: 42%;" class="shp__entitle">IMPORTANTE</span>
                                <span style="margin:6% 1%; height:30%; width:35%; position: absolute;">* Eligiendo la opción de pago en efectivo es necesario que se comunique vía whatsapp para coordinar el pago al momento de ser retirado el pedido.</span>
                                <span style="margin:20% 1%; height:30%; width:34%; position: absolute;">* Eligiendo la opción de pago por transferencia es necesario presentar el comprobante al momento de retirar el pedido.</span>
                            </div>
                        </div>
                    </div>
                    <br>
                    <button onclick="openCity(event, 'Confirmación')" type="button" class="btn btn-outline-primary" style="margin-left:50%;"> Siguiente</button>
                    <div class="shp__etrcon3">
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
                    </div>
                    <div class="shp__rsmcom">
                        <div class="sticky-sm-top">
                            <div class="shp__fontitle">
                                <span class="shp__title"> Resumen Compra</span>
                            </div>
                            <div class="shp__cuerpo">
                                <div class="shp__cuerporigth">
                                    <span class="shp__cuerporigth__title">Total Items</span>
                                    <span class="shp__cuerporigth__sudtitle">Subtotal</span>
                                </div>
                                <div  class="shp__cuerpoleft">
                                    @foreach($count_item as $item)
                                        <span class="shp__cuerpolefttitle">{{$item->cantidad}}</span>
                                    @endforeach
                                    @foreach($sud_total as $sud)    
                                        <span class="shp__cuerpoleftsudtitle">USD {{$sud->total}}$</span>
                                    @endforeach
                                </div>
                            </div>
                            <div class="shp__cuerpo--env">
                                <div class="shp__cuerpo--envrigth">
                                    <span class="shp__cuerpo--envrigthttitle">Envio</span>
                                    <br>
                                    {{-- <span class="shp__cuerpo--envrigthtsudtitle">Bonificaciones</span> --}}
                                </div>
                                <div class="shp__cuerpo--envleft">
                                    <span class="shp__cuerpo--envlefttitle">A definir.</span>
                                    <br>
                                    {{-- <span class="shp__cuerpo--envlefttitle">A definir.</span> --}}
                                </div>
                            </div>
                            <div class="shp__cuerpoiv" >
                                <div class="shp__cuerpo--envrigth">
                                    <span class="shp__cuerpo--envrigthttitle" style="margin-top: -10%;">IVA(21%)</span>
                                    <br>
                                    <span class="shp__cuerpo--envrigthttitle" style="margin-top: -10%;">Otros impuestos</span>
                                    <br>
                                    <span class="shp__cuerpo--envrigthttitle">Total</span>
                                    <br>
                                    <span class="shp__cuerpo--envrigthttitle">Total en ARS</span>
                                </div>
                                <div style="margin-top:-42%;" class="shp__cuerpo--envleft">
                                    <span class="shp__cuerpo--envlefttitle">{{$sud->total*0.21}}$</span>
                                    <br>
                                    <span class="shp__cuerpo--envlefttitle">No aplica.</span>
                                    <br>
                                    @foreach($sud_total as $sud)    
                                        <br><span class="" style="width:85%; margin-left:40%;" >USD {{($sud->total*0.21)+($sud->total)}}$</span>
                                    @endforeach
                                    <br>
                                    <span class="" style="width:95%; margin-left:30%; ">ARS {{($sud->total*0.21)+($sud->total)*(112.53)}}$</span>
                                </div>
                            </div>
                            <div style="width:100%; height:15%;">
                                <div style="width:50%; height:25%;left:40%; position: absolute;">
                                    <br><br>
                                    <button type="button" wire:click="reset_cart" class="btn btn-outline-danger"><i class="far fa-star"></i> Vaciar Carrito</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Confirmación" class="tabcontent">
                    <div class="row">
                        <div style="top: 304px;left: 65px;width: 793px;height: 495px;background: #FFFFFF 0% 0% no-repeat padding-box;box-shadow: 0px 3px 6px #00000012;opacity: 1;">
                            <div style="top: 304px;left: 65px;width: 802px;height: 46px;background: var(--unnamed-color-c1282d) 0% 0% no-repeat padding-box; background: #C1282D 0% 0% no-repeat padding-box;opacity: 1;">
                            <span style="top: 1%;position: absolute;left: 3%;width: 20px;height: 20px;font-size: 25px;color:#FFFFFF;background: transparent 0% 0% no-repeat padding-box;opacity: 1;"><i class="fas fa-cart-plus"></i></span>
                            <span style="margin-left: -3%; margin-top:-0.5%;" class="shp__entitle">IMPORTANTE</span>
                        </div>
                        <div class="row">
                            <div style="margin-left:2%;">
                                <table>
                                    <br>
                                    <tr>
                                        <td style="width: 86%;">Total Items</td>
                                        @foreach($count_item as $item)
                                            <td>{{$item->cantidad}}</td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>Subtotal</td>
                                        @foreach($sud_total as $sud)
                                            <td>USD {{$sud->total}}$</td>
                                        @endforeach
                                    </tr>
                                </table>
                            </div>
                            <div style="margin-left:2%;">
                                <table>
                                    <br>
                                    <tr>
                                    <td style="width: 89%; ">Envio</td>
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
                                        <td style="width: 82%; ">Total</td>
                                        @foreach($sud_total as $sud)      
                                            <td>USD {{($sud->total*0.21)+($sud->total)}}$</td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>Total en ARS</td>
                                        <br>
                                        <td>ARS {{($sud->total*0.21)+($sud->total)*(112.53)}}$</td>
                                    </tr>
                                </table>
                            </div>
                            <div style="margin-left:22%;">
                                <table>
                                    <br>
                                    <tr>
                                        <td style="width: 70%; "><button type="button" wire:click="reset_cart" class="btn btn-outline-danger"><i class="far fa-star"></i>Vaciar Carrito</button></td>
                                        <td><button type="button"  wire:click="save" class="btn btn-danger">Confirmar Compra</button></td>                
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div style="margin: -56% 100%;width: 313px;height: 240px;background: #FFFFFF 0% 0% no-repeat padding-box;border: 1px solid #A2A2A28F;opacity: 1;">
                        <div style="margin-left:-4%;width: 313px;height: 42px;background: #A2A2A2 0% 0% no-repeat padding-box;border: 1px solid #A2A2A2;opacity: 1;">
                            <span style="margin:-1% 88%;" class="shp__entitle">IMPORTANTE</span>
                        </div>
                        <span style="margin:2% 0%; height:30%; width:35%; position: absolute;">* Una vez confirmada la compra recibirá un email con el detalle.</span>
                        <span style="margin:10% 0%; height:30%; width:34%; position: absolute;">* Para modificaciones o cancelaciones deberá comunicarse a nuestros teléfonos antes de las 72 hrs.</span>
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
    function toggleText(){
      var x = document.getElementById("Myid");
      if (x.style.display === "block") {
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