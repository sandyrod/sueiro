<div style="width: 100%; height:160%; position: relative;">
    <div class="shopping__cuerpo">
        <div class="shopping__cuerpomenu">
            <span class="tablinks" onclick="openCity(event, 'Productos')" id="defaultOpen">Mis Productos</span>
            <span class="tablinks1" onclick="openCity(event, 'Entrega')">Entrega</span>
            <span class="tablinks2" onclick="openCity(event, 'Pago')">Pago</span>
            <span class="tablinks3" onclick="openCity(event, 'Confirmación')">Confirmación</span>
        </div>
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
                                    <img class="shp" src="/img/mallas.png"><br>
                                    <span style="margin: 10% 5%">{{ $producto->name }}</span>
                                </td>
                                    <td>{{ $producto->order_quantity }}</td> 
                                <td>{{ $producto->price }}</td>
                                <td> {{($producto->order_quantity)*($producto->price)}} </td>
                                <td><a wire:click="destroy({{ $producto->id }})"><i class="fas fa-trash-alt" style="color:#C11D1D"></i></a>
                            </tr>
                        @endforeach                        
                    </tbody>
                    @foreach($sud_total as $sud)
                        <tr style="height:5%; top:28%; left:80%; position:absolute;">
                            <TD>Subtotal</TD>
                            <TD style="color:#c1282d;">{{$sud->total}}</TD>
                        </tr>
                    @endforeach
                </table>
                <div class="shp__di">
                    <span class="shp__dicon"><i class="fas fa-comment-alt"></i></span>
                    <span class="shp__dititle">Observaciones</span>
                </div>
                <div class="shp__obse">
                    <span class="shp__obsetitle">Orden de compra / Usuario</span>
                    <input class="shp__obseimput" type="text" value="" id="flexCheckDefault">
                    <br>
                    <span class="shp__obsetext">Comentarios</span>
                    <textarea class="shp__obsetexttarea" placeholder="Mensaje"></textarea>
                </div>
                <div class="shp__rsmcom">
                    <div class="shp__fontitle">
                        <span class="shp__title"> Resumen Compra</span>
                    </div>
                    <div class="shp__cuerpo">
                        <div class="shp__cuerporigth">
                            <span class="shp__cuerporigth__title">Total Items</span>
                            <span class="shp__cuerporigth__sudtitle">Subtotal</span>
                        </div>
                        <div class="shp__cuerpoleft">
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
                            <span class="shp__cuerpo--envrigthtsudtitle">Bonificaciones</span>
                        </div>
                        <div class="shp__cuerpo--envleft">
                            <span class="shp__cuerpo--envlefttitle">A definir.</span>
                            <br>
                            <span class="shp__cuerpo--envlefttitle">A definir.</span>
                        </div>
                    </div>
                    <div class="shp__cuerpoiv">
                        <div class="shp__cuerpo--envrigth">
                            <span class="shp__cuerpo--envrigthttitle">IVA(21%)</span>
                            <br>
                            <span class="shp__cuerpo--envrigthttitle">Otros impuestos</span>
                            <br>
                            <span class="shp__cuerpo--envrigthttitle">Total</span>
                            <br>
                            <span class="shp__cuerpo--envrigthttitle">Total en ARS</span>
                        </div>
                        <div style="margin-top:-42%;" class="shp__cuerpo--envleft">
                            <span class="shp__cuerpo--envlefttitle">USD 12,2</span>
                            <br>
                            <span class="shp__cuerpo--envlefttitle">No aplica.</span>
                            <br>
                            <span class="shp__cuerpo--envlefttitle">USD 70,5</span>
                            <br>
                            <span class="shp__cuerpo--envlefttitle">ARS 7490,6</span>
                        </div>
                    </div>
                    <div style="width:100%; height:15%;">
                        <div style="width:50%; height:25%;left:40%; position: absolute;">
                            <button type="button" class="btn btn-danger">Iniciar Compra</button>
                            <br><br>
                            <button type="button" class="btn btn-outline-danger">Vaciar Carrito</button>
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
                    <div class="shp__conteentr">
                        <span class="shp__etrtitle">Seleccione la forma de entrega</span>
                        <div class="shp__etrcue">

                            <span class="shp__etrtitleret">Retiro en sucursal</span>
                            <input style="margin:11% 5%;" class="form-check-input" type="checkbox" value="" id="">
                        </div>
                    </div>
                    <div class="shp__etrcon2">
                        <div class="shp__etrtext">
                            <span>Sucursal Ciudadela</span><br>
                            <span>Bergamini 1127 - Ciudadela</span><br>
                            <span>54-11 4488-4649 / 3825</span><br>
                            <span>Lu a Vie de 8 a 17 hrs</span>
                        </div>
                        <div class="shp__etrmap">
                            MAPA
                        </div>
                    </div>
                    <div style="">
                        <div class="shp__etrcue1">
                            <span class="shp__etrtitleret">Envío a domicilio</span>
                            <input style="margin:11% 5%;" class="form-check-input" type="checkbox" value="" id="">
                        </div>
                    </div>
                </div>
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
                    <div class="shp__fontitle">
                        <span class="shp__title"> Resumen Compra</span>
                    </div>
                    <div class="shp__cuerpo">
                        <div class="shp__cuerporigth">
                            <span class="shp__cuerporigth__title">Total Items</span>
                            <span class="shp__cuerporigth__sudtitle">Subtotal</span>
                        </div>
                        <div class="shp__cuerpoleft">
                            <span class="shp__cuerpolefttitle">2</span>
                            <span class="shp__cuerpoleftsudtitle">USD 58,6</span>
                        </div>
                    </div>
                    <div class="shp__cuerpo--env">
                        <div class="shp__cuerpo--envrigth">
                            <span class="shp__cuerpo--envrigthttitle">Envio</span>
                            <br>
                            <span class="shp__cuerpo--envrigthtsudtitle">Bonificaciones</span>
                        </div>
                        <div class="shp__cuerpo--envleft">
                            <span class="shp__cuerpo--envlefttitle">Sin costo.</span>
                            <br>
                            <span class="shp__cuerpo--envlefttitle">A definir.</span>
                        </div>
                    </div>
                    <div class="shp__cuerpoiv">
                        <div class="shp__cuerpo--envrigth">
                            <span class="shp__cuerpo--envrigthttitle">IVA(21%)</span>
                            <br>
                            <span class="shp__cuerpo--envrigthttitle">Otros impuestos</span>
                            <br>
                            <span class="shp__cuerpo--envrigthttitle">Total</span>
                            <br>
                            <span class="shp__cuerpo--envrigthttitle">Total en ARS</span>
                        </div>
                        <div style="margin-top:-42%;" class="shp__cuerpo--envleft">
                            <span class="shp__cuerpo--envlefttitle">USD 12,2</span>
                            <br>

                            <span class="shp__cuerpo--envlefttitle">No aplica.</span>
                            <br>

                            <span class="shp__cuerpo--envlefttitle">USD 70,5</span>
                            <br>

                            <span class="shp__cuerpo--envlefttitle">ARS 7490,6</span>
                        </div>
                    </div>
                    <div style="width:100%; height:15%;">
                        <div style="width:50%; height:25%;left:40%; position: absolute;">
                            <button type="button" class="btn btn-danger">Iniciar Compra</button>
                            <br><br>
                            <button type="button" class="btn btn-outline-danger"><i class="far fa-star"></i>
                                Guardar Carrito</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Pago" class="tabcontent">
                <div class="row">
                <div style="top: 306px;
                left: 65px;
                width: 473px;
                height: 325px;
                background: #FFFFFF 0% 0% no-repeat padding-box;
                box-shadow: 0px 3px 6px #00000012;
                opacity: 1;
                border:solid;">      
                <div class="shp__pg">
                  <span class="shp__enicon"><i class="fas fa-wallet"></i></span>
                  <span class="shp__entitle">Forma de Entrega</span>
                </div>
                  <div style="
                  margin: 30px 35px;                  
                  width: 171px;
                  height: 55px;
                  background: #FFFFFF 0% 0% no-repeat padding-box;
                  border: 1px solid #A2A2A2;
                  opacity: 1;">
                    <input style="margin:10% 7%;" class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                    <span style="margin:1.5% 2%; position: absolute;"> Contado</span>
                </div>
                <div style="
                margin:30px 35px;
                width: 229px;
                height: 55px;
                border: 1px solid var(--unnamed-color-c1282d);
                background: #FFFFFF 0% 0% no-repeat padding-box;
                border: 1px solid #C1282D;
                opacity: 1;">
                  <input style="margin:7% 7%;" class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></td>
                  <span style="margin:1.5% 1%;position: absolute;"> Transferencia Bancaria</span>

                </div>  
                <div style="
                margin:-10px 35px;
                width: 229px;
                height: 55px;">
                <span> SUEIRO E HIJOS </span>
                <span>CBU: 0957541204574554</span>
                <span>ALIAS: SUEIRO.E.HIJOS</span>

                </div>
              </div>
                <div style="
                top: 30px;
                margin-left: 20px;
                width: 313px;
                height: 325px;
                background: #FFFFFF 0% 0% no-repeat padding-box;
                border: 1px solid #A2A2A28F;
                opacity: 1;
                border:solid;">
                  <div style="top: 306px;
                    margin-left:-5%;
                    width: 313px;
                    height: 42px;
                    background: var(--unnamed-color-c1282d) 0% 0% no-repeat padding-box;
                    border: 1px solid var(--unnamed-color-c1282d);
                    background: #C1282D 0% 0% no-repeat padding-box;
                    border: 1px solid #C1282D;
                    opacity: 1;">
                    <span style="margin-left: 42%;" class="shp__entitle">IMPORTANTE</span>

                    <span style="margin:6% 1%; height:30%; width:35%; position: absolute;">* Eligiendo la opción de pago en efectivo es necesario que se comunique vía whatsapp para coordinar el pago al momento de ser retirado el pedido.</span>
                    <span style="margin:20% 1%; height:30%; width:34%; position: absolute;">* Eligiendo la opción de pago por transferencia es necesario presentar el comprobante al momento de retirar el pedido.</span>
                  </div>

                </div>

            </div>
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
              <div class="shp__fontitle">
                  <span class="shp__title"> Resumen Compra</span>
              </div>
              <div class="shp__cuerpo">
                  <div class="shp__cuerporigth">
                      <span class="shp__cuerporigth__title">Total Items</span>
                      <span class="shp__cuerporigth__sudtitle">Subtotal</span>
                  </div>
                  <div class="shp__cuerpoleft">
                      <span class="shp__cuerpolefttitle">2</span>
                      <span class="shp__cuerpoleftsudtitle">USD 58,6</span>
                  </div>
              </div>
              <div class="shp__cuerpo--env">
                  <div class="shp__cuerpo--envrigth">
                      <span class="shp__cuerpo--envrigthttitle">Envio</span>
                      <br>
                      <span class="shp__cuerpo--envrigthtsudtitle">Bonificaciones</span>
                  </div>
                  <div class="shp__cuerpo--envleft">
                      <span class="shp__cuerpo--envlefttitle">Sin costo.</span>
                      <br>
                      <span class="shp__cuerpo--envlefttitle">A definir.</span>
                  </div>
              </div>
              <div class="shp__cuerpoiv">
                  <div class="shp__cuerpo--envrigth">
                      <span class="shp__cuerpo--envrigthttitle">IVA(21%)</span>
                      <br>
                      <span class="shp__cuerpo--envrigthttitle">Otros impuestos</span>
                      <br>
                      <span class="shp__cuerpo--envrigthttitle">Total</span>
                      <br>
                      <span class="shp__cuerpo--envrigthttitle">Total en ARS</span>
                  </div>
                  <div style="margin-top:-42%;" class="shp__cuerpo--envleft">
                      <span class="shp__cuerpo--envlefttitle">USD 12,2</span>
                      <br>

                      <span class="shp__cuerpo--envlefttitle">No aplica.</span>
                      <br>

                      <span class="shp__cuerpo--envlefttitle">USD 70,5</span>
                      <br>

                      <span class="shp__cuerpo--envlefttitle">ARS 7490,6</span>
                  </div>
              </div>
              <div style="width:100%; height:15%;">
                  <div style="width:50%; height:25%;left:40%; position: absolute;">
                      <button type="button" class="btn btn-danger">Continuar</button>
                      <br><br>
                      <button type="button" class="btn btn-outline-danger"><i class="far fa-star"></i>Guardar Carrito</button>
                  </div>
              </div>
          </div>
        </div>
        <div id="Confirmación" class="tabcontent">
            <div class="row">
                <div style="top: 304px;
                left: 65px;
                width: 793px;
                height: 495px;
                background: #FFFFFF 0% 0% no-repeat padding-box;
                box-shadow: 0px 3px 6px #00000012;
                opacity: 1;">
                    <div style="top: 304px;
                    left: 65px;
                    width: 802px;
                    height: 46px;
                    background: var(--unnamed-color-c1282d) 0% 0% no-repeat padding-box;
                    background: #C1282D 0% 0% no-repeat padding-box;
                    opacity: 1;">
                        <span style="top: 1%;
                        position: absolute;
                        left: 3%;
                        width: 20px;
                        height: 20px;
                        font-size: 25px;
                        color:#FFFFFF;
                        background: transparent 0% 0% no-repeat padding-box;
                        opacity: 1;"><i class="fas fa-cart-plus"></i></span>
                        <span style="margin-left: -3%; margin-top:-0.5%;" class="shp__entitle">IMPORTANTE</span>
                    </div>
                    <div class="row">
                        <div style="margin-left:2%;">
                            <table>
                                <br>
                                <tr>
                                  <td style="width: 90%;">Total Items</td>
                                  <td>2</td>
                                </tr>
                                <tr>
                                  <td>Subtotal</td>
                                  <td>USD 58,6</td>
                                </tr>
                              </table>
                        </div>
                        <div style="margin-left:2%;">
                            <table>
                                <br>
                                <tr>
                                  <td style="width: 90%;">Envio</td>
                                  <td>Sin costo.</td>
                                </tr>
                                <tr>
                                    <td>Bonificaciones</td>
                                    <td>No aplica.</td>
                                  </tr>
                                  <tr>
                                    <td>IVA ( 21% )</td>
                                    <td>USD 12,2</td>
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
                                  <td style="width: 87.8%;">Total</td>
                                  <td>USD 70,5</td>
                                </tr>
                                <tr>
                                    <td>Total en ARS</td>
                                    <td>ARS 7490,6</td>
                                </tr>
                            </table>
                        </div>
                        <div style="margin-left:22%;">
                            <table>
                                <br>
                                <tr>
                                  <td style="width: 70%; "><button type="button" class="btn btn-outline-danger"><i class="far fa-star"></i>Vaciar Carrito</button></td>
                                  <td><button type="button" class="btn btn-danger">Confirmar Compra</button></td>                
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div style="margin: -56% 100%;
                width: 313px;
                height: 240px;
                background: #FFFFFF 0% 0% no-repeat padding-box;
                border: 1px solid #A2A2A28F;
                opacity: 1;">
                    <div style="
                    margin-left:-4%;
                    width: 313px;
                    height: 42px;
                    background: #A2A2A2 0% 0% no-repeat padding-box;
                    border: 1px solid #A2A2A2;
                    opacity: 1;">
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
